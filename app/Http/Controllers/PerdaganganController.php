<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perdagangan;
use Auth;

class PerdaganganController extends Controller
{
    function index()
    {
        $data['list_perdagangan'] = perdagangan::all();
        // return $data;
        return view('admin.perdagangan.index', $data);
    }

    function create()
    {
        return view('admin.perdagangan.create');
    }

    function store()
    {
        $perdagangan = new Perdagangan;
        // $perdagangan->judul = request('judul');
        $perdagangan->nama_bisnis = request('nama_bisnis');
        $perdagangan->keterangan = request('keterangan');
        $perdagangan->HandleUploadFoto();
        $perdagangan->save();
        return redirect('perdagangan')->with('success', 'Data Berhasil DiUpload');
    }

    function show(Perdagangan $perdagangan)
    {
        $data['perdagangan'] = $perdagangan;
        return view('perdagangan.show', $data);
    }


    function update(Perdagangan $perdagangan)
    {
        // $perdagangan->judul = request('judul');
        $perdagangan->nama_bisnis = request('nama_bisnis');
        $perdagangan->keterangan = request('keterangan');
        $perdagangan->HandleUploadFoto();
        $perdagangan->save();
        return redirect('perdagangan')->with('success', 'Data Berhasil Diedit');
    }

    function edit(Perdagangan $perdagangan)
    {
        $data['perdagangan'] = $perdagangan;
        return view('admin.perdagangan.edit');
    }

    function destroy(Perdagangan $perdagangan)
    {
        $perdagangan->delete();
        $perdagangan->handleDeleteFoto();
        return redirect('perdagangan')->with('danger', 'Data Berhasil DiHapus');
    }
}
