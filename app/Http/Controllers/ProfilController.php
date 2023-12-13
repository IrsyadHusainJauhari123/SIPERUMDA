<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profil;
use Auth;

class ProfilController extends Controller
{
    function index()
    {
        $data['list_profil'] = Profil::all();
        // return $data;
        return view('admin.profil.index', $data);
    }

    function create()
    {
        return view('admin.profil.create');
    }

    function store()
    {
        $profil = new Profil;
        // $profil->judul = request('judul');
        $profil->level = request('level');
        $profil->keterangan = request('keterangan');
        $profil->save();
        return redirect('profil')->with('success', 'Data Berhasil DiUpload');
    }

    function show(Profil $profil)
    {
        $data['profil'] = $profil;
        return view('profil.show', $data);
    }


    function update(Profil $profil)
    {
        // $profil->judul = request('judul');
        $profil->level = request('level');
        $profil->keterangan = request('keterangan');
        $profil->save();
        return redirect('profil')->with('success', 'Data Berhasil Diedit');
    }

    function edit(Profil $profil)
    {
        $data['profil'] = $profil;
        return view('admin.profil.edit');
    }

    function destroy(Profil $profil)
    {
        $profil->delete();
        return redirect('profil')->with('danger', 'Data Berhasil DiHapus');
    }
}
