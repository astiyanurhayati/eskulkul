<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use App\Models\Category;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(Request $request){

        $keyword = $request->keyword;
      

        $datas = []; 
       
        $masterStudent = Student::with('users')->where('name', 'LIKE', '%'.$keyword.'%')
                                                ->orWhere('nis', 'LIKE', '%'.$keyword.'%')
                                                ->orWhere('rombel', 'LIKE', '%'.$keyword.'%')
                                                ->orWhere('rayon', 'LIKE', '%'.$keyword.'%')

                                                
        ->get();
        
        return view('dashboard.master_student.student', compact('masterStudent'));
    }

    
    public function data(){
        
        $masterStudent = User::with('students')->where('id', Auth::user()->id)->get();
        return view('dashboard.instructor.manage.data', compact('masterStudent'));
    }

    
    public function create(){
        $rayons = Rayon::all();
        $rombels = Rombel::all();
        
        
        return view('dashboard.master_student.create', compact('rayons', 'rombels'));
    }

    public function store(Request $request){
        
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'jk' => 'required',
            'kelas' => 'required'

        ]);
        Student::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'jk' => $request->jk,
            'kelas' => $request->kelas,
          
        ]);

        return redirect('/dashboard/student')->with('success', 'Berhasil Menambahkan data siswa');
    }

    public function createStudentOwn(){

        $names = Student::all();
        $umum = User::with('category')->where('category_id', '=', '1')->get();
        $produktif = User::with('category')->where('category_id', '=', '2')->get();
        $keputrian = User::with('category')->where('category_id', '=', '3')->get();
        $seni = User::with('category')->where('category_id', '=', '4')->get();
        $eskuls = User::with('category')->get();
        return view('dashboard.master_student.eskul', compact('names', 'eskuls', 'keputrian', 'umum', 'produktif', 'seni'));
    }

    public function studentStore(Request $request){


        // dd($request->all());
        $name = $request->name;
        $keputrian = $request->Keputrian;
        $umum = $request->Umum;
        $produktif = $request->Produktif;
        $seni = $request->Seni;
        $request->validate([
            'name' => 'required',
            'Produktif' => 'required',
            'Seni' => 'required',
            'Umum' => 'required',
        ]);

        // dd($keputrian[0]);
       

        if (count($umum) > 0) {
            for ($i = 0; $i < count($umum); $i++) {
                StudentUser::create([
                    'student_id' => $request->name,
                    'user_id' => $umum[$i]
                ]);
            }
        }

        if (count($produktif) > 0) {
            for ($i = 0; $i < count($produktif); $i++) {
                StudentUser::create([
                    'student_id' => $request->name,
                    'user_id' => $produktif[$i]
                ]);
            }
        }
        if ($keputrian != null) {
            for ($i = 0; $i < count($keputrian); $i++) {
                StudentUser::create([
                    'student_id' => $request->name,
                    'user_id' => $keputrian[$i]
                ]);
            }
        }

        if (count($seni) > 0) {
            for ($i = 0; $i < count($seni); $i++) {
                StudentUser::create([
                    'student_id' => $request->name,
                    'user_id' => $seni[$i]
                ]);
            }
        }

        return redirect()->back()->with('success', 'behasil menambahkan eskul');


    }



    public function absensi(Request $request){



        $masterStudent = User::with('students')->where('id', Auth::user()->id)->get();
        $filterKeyword = $request->get('name');
        if($filterKeyword){
            $masterStudent = Student::where("name", "LIKE", "%$filterKeyword%")->paginate(10);
            
        }
        return view('dashboard.instructor.absensi.absensi', compact('masterStudent'));
    }


    public function absensiRedirect(Request $request){

        // dd($request->kelas);
        $studentUser = StudentUser::with('student')->where('user_id', Auth::user()->id)->get();
        // dd($studentUser);
        $students = []; 
        foreach($studentUser as $siswa){
            if($siswa['student']['kelas'] == $request->kelas){
                array_push($students, $siswa);
            }
        }
        // dd($students);

        // foreach($students as $item){
        //     Absensi::create([
        //         'tanggal' => $request->tanggal,
        //         'student_id' => $item->student_id
        //     ]);
        // }
        
        return view('dashboard.instructor.absensi.showinput', compact('request', 'students'));
    }

    public function absensiStore(Request $request){
        // dd($request->all());


        $request->validate([
            'keterangan' => 'required'
        ]);
        
        Absensi::create([
            'tanggal' => $request->tanggal,
            'student_id' => $request->student_id,
            'keterangan' => $request->keterangan

        ]);

        return back();
    }


    
   
}
