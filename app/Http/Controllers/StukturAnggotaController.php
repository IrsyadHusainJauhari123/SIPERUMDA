<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StuktrurAnggotaController;
use App\Models\StukturAnggota;
use Auth;

class StukturAnggotaController extends Controller
{
    function index()
    {
        $data['list_stukturanggota'] = StukturAnggota::all();
        return view('admin.stukturanggota.index', $data);
    }

    function create()
    {
        return view('admin.stukturanggota.create');
    }

    function store()
    {
        $stukturanggota = new StukturAnggota;
        $stukturanggota->nama_anggota = request('nama_anggota');
        $stukturanggota->level = request('level');
        $stukturanggota->foto = request('foto');
        $stukturanggota->HandleUploadFoto();
        $stukturanggota->save();

        return redirect('stukturanggota')->with('success', 'Data Anggota Berhasil DiTambah');
    }

    function show(StukturAnggota $stukturanggota)
    {
        $data['stukturanggota'] = $stukturanggota;
        return view('stukturanggota.show', $data);
    }

    function edit(StukturAnggota $stukturanggota)
    {
        $data['stukturanggota'] = $stukturanggota;
        return view('admin.stukturanggota.edit', $data);
    }

    function update(StukturAnggota $stukturanggota)
    {
        $stukturanggota->nama_anggota = request('nama_anggota');
        $stukturanggota->level = request('level');
        // $stukturanggota->foto = request('foto');
        // $stukturanggota->HandleUploadFoto();
        $stukturanggota->save();
        return redirect('stukturanggota')->with('success', 'Data Anggota Berhasil Diedit');
    }



    function destroy(StukturAnggota $stukturanggota)
    {
        $stukturanggota->delete();
        $stukturanggota->handleDeleteFoto();
        return redirect('stukturanggota')->with('danger', 'Data Berhasil DiHapus');
    }
}
