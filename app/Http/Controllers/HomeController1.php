<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bisnis;
use App\Models\VisiMisi;
use App\Models\Pemerintah;
use App\Models\Profil;

class HomeController1 extends Controller
{
    function showcomponents()
    {
        return view('components.admin');
    }

    function showbisnis()
    {
        return view('admin.bisnis');
    }

    function showuser()
    {
        return view('admin.user');
    }

    function showprofil()
    {
        return view('admin.profil');
    }

    function showpemerintah()
    {
        return view('admin.pemerintah');
    }

    function showstukturanggota()
    {
        return view('admin.stukturanggota');
    }
}
