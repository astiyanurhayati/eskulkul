<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\InfoLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InfoLombaController extends Controller
{

    // $titlee = DB::table('info_lombas')->join('category', 'info_lombas.category_id', '=', 'category.category_id')->get();
    // $title = $titlee->category->name;

    public function info(){

        // dd(request('search'));
        
        $infoLombas = InfoLomba::latest();  
        // $info = InfoLomba::where('category_id', $)
        if(request('search')){
            $categories = Category::where('name', 'like', '%' . request('search') . '%')->get();
            foreach($categories as $category){
                $result = $category->id;
            }
        }

        return view('pages.info.index', [
            'infoLombas' => $infoLombas->get(),
            'categories' => Category::all()
        ]);
    }
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoLomba = InfoLomba::all();
        return view('dashboard.esktrakurikuler.info.index', compact('infoLomba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('dashboard.esktrakurikuler.info.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $infoimg = $request->infoimg;
        $infolomba = $infoimg->getClientOriginalName();

        $request->validate([
            'link'=> 'min:3',
            'category_id'=> 'required',
            'infoimg' => 'required'
            
        ]);

        $data =   InfoLomba::create([
           'link' => $request->link,
           'category_id' => $request->category_id,
           'user_id' => Auth::user()->id,
           'infoimg' => $infolomba
        ]);

        $infoimg->move(public_path() . '/info', $infolomba);

        $data->save();

        return redirect('/dashboard/info')->with('success', 'Berhasil Tambah Informasi Lomba');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
   

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infolomba = InfoLomba::where('id', $id)->first();
        $categories = Category::all();
        return view('dashboard.esktrakurikuler.info.edit', compact('infolomba', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = InfoLomba::findorfail($id);
        $updateimg = $update->infoimg;
        $data = [
            "link" => $request->link,
            "category_id" => $request->category_id,
        ];

        $request->infoimg->move(public_path().'/info',$updateimg);
        $update->update($data);
        return redirect('dashboard/info')->with('success', "berhasil update Informasi Lomba");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = InfoLomba::findorfail($id);

        $file = public_path('/info/') . $hapus->infoimg;

        //cek jika ada gambar
        if(file_exists($file)){
            //maka hapus file di folder public/info/
            @unlink($file);
        }


        $hapus->delete();
        return back()->with('success', "berhasil Hapus Informasi Lomba");
    }

    public function showCategoryInfo(Category $category){

        $infoLombas = $category->infolombas()->get();
        // return $infolombas;
        $categories = Category::all();

        return view('pages.info.index', compact('infoLombas', 'categories'));
    }
}
