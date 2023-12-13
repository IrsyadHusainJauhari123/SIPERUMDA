<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Padi;

use Auth;

class PadiController extends Controller
{
    function index()
    {
        $data['list_padi'] = Padi::all();
        // return $data;
        return view('admin.padi.index', $data);
    }

    function create()
    {
        return view('admin.padi.create');
    }

    function store()
    {
        $padi = new Padi();
        // $padi->judul = request('judul');
        $padi->nama_bisnis = request('nama_bisnis');
        $padi->keterangan = request('keterangan');
        $padi->HandleUploadFoto();
        $padi->save();
        return redirect('padi')->with('success', 'Data Berhasil DiUpload');
    }

    function show(Padi $padi)
    {
        $data['padi'] = $padi;
        return view('padi.show', $data);
    }


    function update(Padi $padi)
    {
        // $padi->judul = request('judul');
        $padi->nama_bisnis = request('nama_bisnis');
        $padi->keterangan = request('keterangan');
        $padi->HandleUploadFoto();
        $padi->save();
        return redirect('padi')->with('success', 'Data Berhasil Diedit');
    }

    function edit(Padi $padi)
    {
        $data['padi'] = $padi;
        return view('admin.padi.edit');
    }

    function destroy(Padi $padi)
    {
        $padi->delete();
        $padi->handleDeleteFoto();
        return redirect('padi')->with('danger', 'Data Berhasil DiHapus');
    }
}
