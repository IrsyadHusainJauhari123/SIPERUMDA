<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Auth;

use Auth;

class AuthController extends Controller
{

    function showLogin()
    {
        return view('login');
    }
    function loginProcess()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('dashboard')->with('success', 'Selamat Datang Admin Kecamatam Delta Pawan');
        } else {
            return back()->with('danger', 'Login Gagal Silahkan Cek email dan Password anda Kembali');
        }
    }
    function logout()
    {
    }
    function registration()
    {
    }
    function forgetPassword()
    {
    }
}
