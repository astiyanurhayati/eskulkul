<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use App\Models\Category;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){

        $masterStudent = Student::with('users')->get();
        return view('dashboard.master_student.student', compact('masterStudent'));
    }

    
    public function data(){
        // $masterStudent = Student::with('students')->where('', Auth::user()->id)->get();
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
            'jk' => 'required'

        ]);
        Student::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'jk' => $request->jk
        ]);

        return redirect('/dashboard/student')->with('success', 'Berhasil Menambahkan data siswa');
    }

    public function createStudentOwn(){

        $names = Student::all();
        $eskuls = User::with('category')->get();
        $keputrian = User::with('category')->where('category_id', '=', '1')->get();
        $umum = User::with('category')->where('category_id', '=', '2')->get();
        $produktif = User::with('category')->where('category_id', '=', '3')->get();
        $seni = User::with('category')->where('category_id', '=', '4')->get();
        return view('dashboard.master_student.eskul', compact('names', 'eskuls', 'keputrian', 'umum', 'produktif', 'seni'));
    }

    public function studentStore(Request $request){


        // dd($request->all());
        $name = $request->name;
        $keputrian = $request->keputrian;
        $umum = $request->umum;
        $produktif = $request->Produktif;
        $seni = $request->Seni;
        $request->validate([
            'name' => 'required',
            'Produktif' => 'required',
            'Seni' => 'required',
            'umum' => 'required',
        ]);

        // dd($keputrian[0]);
        if ($keputrian != null) {
            for ($i = 0; $i < count($keputrian); $i++) {

                StudentUser::create([
                    'student_id' => $request->name,
                    'user_id' => $keputrian[$i]
                ]);
            }
        }

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


    
   
}