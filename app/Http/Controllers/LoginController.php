<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request) {
       // dd($request->all());
       if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('/beranda')->with('Selamat Datang', 'Anda Berhasil Login');
       }
       return redirect('welcome');
    }   

    public function logout (Request $request) {
        Auth::logout();
        return redirect('/');
     }   
}
