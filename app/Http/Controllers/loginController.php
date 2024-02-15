<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function login_proses(Request $request){
        $request ->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request -> email,
            'password' => $request -> password
        ];
        if(Auth::attempt($data)){
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.index');
            } elseif (Auth::user()->role == 'user') {
                return redirect()->route('admin.karyawan.dashboardUser');
    }
        }else{
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('succes', 'Kamu Berhasil Logout');
    }
}
