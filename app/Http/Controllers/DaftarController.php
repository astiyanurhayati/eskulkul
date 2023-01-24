<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DaftarController extends Controller
{
    public function myEskul(){
        return view('pages.myeskul');
    }

    public function daftar(){

        $seni = Daftar::where('category_id', '=', '4')->get();
        $keputrian = Daftar::where('category_id', '=', '1')->get();
        $umum = Daftar::where('category_id', '=', '2')->get();
        $produktif = Daftar::where('category_id', '=', '3')->get();
        return view('pages.daftar.index',compact('seni', 'keputrian', 'umum', 'produktif'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.esktrakurikuler.daftar.index', [
            'daftars' => Daftar::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.esktrakurikuler.daftar.create', [
            'categories' => Category::all()
        ]);
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
            'title'=> 'required|min:3',
            'slug'=> 'required:unique:daftars',
            'category_id' => 'required',
            'body' => 'required',
            'gambar' => 'required'
          
            
        ]);

       if($request->hasFile('gambar')){
            foreach($request->file('gambar') as $image){
                    $name = $image->getClientOriginalName();
                    $image->move(public_path() . '/daftarimage/', $name);
                    $data[] = $name;
            }
       }

       Daftar::create([
        'title' => $request->title,
        'slug'=> $request->slug,
        'category_id' => $request->category_id,
        'body' => $request->body,
        'user_id' => Auth::user()->id,
        'gambar' =>json_encode($data)
   
       ]);

        return redirect('/dashboard/daftar')->with('success', 'Berhasil Tambah Data Daftar');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        return view('pages.daftar.detail', [
            'daftar' => $daftar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $categories = Category::all();
        $daftar = Daftar::where('slug', $slug)->first();
        return view('dashboard.esktrakurikuler.daftar.edit', compact('categories', 'daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        $rules =[
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ];
        
        if($request->slug != $daftar->slug){
            $rules['slug'] = 'required|unique:daftars';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Daftar::where('id', $daftar->id)
        ->update($validatedData);
        return redirect('/dashboard/daftar')->with('success', 'berhasil update data');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $daftar = Daftar::where('slug', $slug)->first();
        if($daftar->gambar){
            Storage::delete($daftar->gambar);
        }
        $daftar->delete();
            

        return back()->with('success', 'berhasil hapus daftar');
    }

    public function checkSlug(Request $request){

        $slug = SlugService::createSlug(Daftar::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
