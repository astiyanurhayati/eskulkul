<?php

use App\Models\Category;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\InfoLombaController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\MasterStudentController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\RayonController;
use App\Models\Instructor;
use App\Models\MasterStudent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//category

Route::get('/', function () {
    return view('welcome');
});

//prestasi
Route::get('/prestasis', [PrestasiController::class, 'index']);
Route::get('/prestasi/{prestasi:slug}',[PrestasiController::class, 'show']);

//infolomba
Route::get('/info-lomba', [InfoLombaController::class, 'info']);
Route::get('/info/{infolomba:slug}', [InfoLombaController::class, 'show']);


//daftar
Route::get('/daftar', [DaftarController::class, 'daftar']);
Route::get('/daftar/{daftar:slug}', [DaftarController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('pages.prestasi.index', [
        'title' => "Kategori Prestasi: ".$category->name,
        'prestasis' => $category->prestasis->load('category'),
    ]);
    
});

Route::get('/categories', function () {
    return view('category.categories', [
        'categories' => Category::all()
    ]);
});



Route::middleware(['isLogin', 'cekRole:admin,instructor'])->group(function () {
    Route::prefix('/dashboard')->name('dashboard')->group(function () {
        Route::resource('/category', CategoryController::class);
        Route::get('/', [AuthController::class, 'dashboard']);
        
        Route::prefix('/info')->group(function () {
            Route::get('/', [InfoLombaController::class, 'index']);
            Route::get('/create', [InfoLombaController::class, 'create']);
            Route::post('/store', [InfoLombaController::class, 'store']);
            
        });
        
        
    });
    
});


Route::middleware((['isLogin', 'cekRole:admin']))->group(function () {
    
    Route::prefix('/dashboard')->name('dashboard')->group(function () {
        
        
        Route::prefix('/prestasi')->group(function () {
            Route::get('/', [PrestasiController::class, 'prestasi'])->name('.prestasi.index');
            Route::get('/create', [PrestasiController::class, 'create'])->name('.prestasi.create');
            Route::get('/edit/{prestasi:slug}', [PrestasiController::class, 'edit'])->name('.prestasi.edit');
            Route::patch('/update/{prestasi:slug}', [PrestasiController::class, 'update'])->name('.prestasi.update');
            Route::post('/store', [PrestasiController::class, 'store'])->name('.prestasi.store');
            Route::delete('/delete/{slug}',[PrestasiController::class,'destroy'])->name('.prestasi.destroy'); 
            Route::get('/checkSlug', [PrestasiController::class, 'chekSlug']);
        });


        Route::prefix('/daftar')->group(function () {
            Route::get('/', [DaftarController::class, 'index'])->name('.daftar.index');
            Route::get('/create', [DaftarController::class, 'create'])->name('.daftar.create');
            Route::get('/edit/{slug}', [DaftarController::class, 'edit'])->name('.daftar.edit');
            Route::get('/checkSlug', [DaftarController::class, 'checkSlug']);
            Route::patch('/update/{daftar:slug}', [DaftarController::class, 'update'])->name('.daftar.update');
            Route::post('/store', [DaftarController::class, 'store'])->name('.daftar.store');

        });


        Route::get('/master-student', [MasterStudentController::class, 'index']);
        Route::resource('rayon', RayonController::class);
        Route::resource('instructor', InstructorController::class);
        
    });




});



Route::middleware('isGuest')->group(function () {
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login/auth', [AuthController::class, 'auth'])->name('login.auth');
});


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/error',function () {
        return view('error');
    }
);
