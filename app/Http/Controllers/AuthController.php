<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }


    public function auth(Request $request){
        //  dd($request->all());
         $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ],
        [
            //costom massage
            'username.exists' => 'username ini belum tersedia',
            'username.required' => 'username harus diisi',
            'password.required' => 'password harus diisi'
        ],
     );

     $user = $request->only('username', 'password');

     if(Auth::attempt($user)){
            return redirect('dashboard');
     }else{
        return redirect()->back()->with('error', "gagal login, silahkan cek dan coba lagi!");
     }
    }



    public function dashboard(){
        return view('dashboard.index');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
  
}
