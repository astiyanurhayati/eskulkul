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
        
        // $infoLombas->where('category_id', $result);

        return view('pages.info.index', [
            'infoLombas' => $infoLombas->get()
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
        $request->validate([
            'link'=> 'min:3',
            'slug'=> 'required:unique:infolombas',
            'category_id'=> 'required',
            
        ]);

        InfoLomba::create([
           'link' => $request->link,
           'slug' => $request->slug,
           'category_id' => $request->category_id,
           'user_id' => Auth::user()->id,
        ]);


        return redirect('/dashboard/info')->with('success', 'Berhasil Tambah Informasi Lomba');

      



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
    public function show(InfoLomba $infoLomba)
    {
        return view('pages.info.index', [
            'infolombas' => InfoLomba::latest()->get(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoLomba $infoLomba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoLomba $infoLomba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoLomba  $infoLomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoLomba $infoLomba)
    {
        //
    }
}
