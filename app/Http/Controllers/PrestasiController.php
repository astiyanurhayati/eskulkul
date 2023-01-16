<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{

    public function index(){

        // dd(request('search'));

    $title = '';
    if(request('category')){
        $category = Category::firstWhere('slug', request('category'));
        $title = " di " . $category->name;
    }

    return view('pages.prestasi.index', [
        'title' => "Semua Prestasi" . $title,
        'prestasis' =>Prestasi::latest()->filter(request(['search', 'category']))->paginate('6'),
        'categories' => Category::all()
        ]); 
    }

    public function show(Prestasi $prestasi){
        return view('pages.prestasi.detail_prestasi', [
            'prestasi' => $prestasi
        ]);
    }

    public function prestasi(){

        return view('dashboard.esktrakurikuler.prestasi.index', [
            'prestasis' => Prestasi::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create(){
        $categories = Category::all();
        return view('dashboard.esktrakurikuler.prestasi.create', compact('categories'));
    }

    public function edit($slug){
        $categories = Category::all();
        $prestasi = Prestasi::where('slug', $slug)->first();
        return view('dashboard.esktrakurikuler.prestasi.edit', compact('categories', 'prestasi'));
    }

   
    public function store(Request $request){    
        // return $request;
        // dd($request->all());
        // return $request->file('gambar')->store('prestasi-images');
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required:unique:prestasis',
            'gambar' => 'required',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if($request->file('gambar')){
            $validasiData['gambar'] = $request->file('gambar')->store('prestasi-images');
        }

        $validasiData['user_id'] = auth()->user()->id;
        $validasiData['excerpt'] = Str::limit(strip_tags($request->body), 50, '...');

        Prestasi::create($validasiData);

        return redirect('/dashboard/prestasi')->with('success', 'Berhasil Tambah Postingan Prestasi');
    }
    public function update(Request $request, Prestasi $prestasi){

        $rules =[
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
        ];
        
        if($request->slug != $prestasi->slug){
            $rules['slug'] = 'required|unique:prestasis';
        }
        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('prestasi-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

        Prestasi::where('id', $prestasi->id)
            ->update($validatedData);
        return redirect('/dashboard/prestasi')->with('success', 'berhasil update data');
    }

    public function chekSlug(Request $request){
        $slug = SlugService::createSlug(Prestasi::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function destroy($slug){
        $prestasi = Prestasi::where('slug', $slug)->first();
        if($prestasi->gambar){
            Storage::delete($prestasi->gambar);
        }
        // dd($prestasi);
        $prestasi->delete();
        return redirect('dashboard/prestasi/')->with('success', 'Berhasil Hapus Postingan Prestasi');
    }
}
