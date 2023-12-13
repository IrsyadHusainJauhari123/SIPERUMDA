<?php

namespace App\Http\Controllers;

use App\Models\User;
// use App\Models\jasaangkut;
use App\Models\JasaAngkut;
use Auth;

class JasaAngkutController extends Controller
{
    function index()
    {
        $data['list_jasaangkut'] = JasaAngkut::all();
        // return $data;
        return view('admin.jasaangkut.index', $data);
    }

    function create()
    {
        return view('admin.jasaangkut.create');
    }

    function store()
    {
        $jasaangkut = new JasaAngkut();
        // $jasaangkut->judul = request('judul');
        $jasaangkut->nama_bisnis = request('nama_bisnis');
        $jasaangkut->keterangan = request('keterangan');
        $jasaangkut->HandleUploadFoto();
        $jasaangkut->save();
        return redirect('jasaangkut')->with('success', 'Data Berhasil DiUpload');
    }

    function show(Jasaangkut $jasaangkut)
    {
        $data['jasaangkut'] = $jasaangkut;
        return view('jasaangkut.show', $data);
    }


    function update(Jasaangkut $jasaangkut)
    {
        // $jasaangkut->judul = request('judul');
        $jasaangkut->nama_bisnis = request('nama_bisnis');
        $jasaangkut->keterangan = request('keterangan');
        $jasaangkut->HandleUploadFoto();
        $jasaangkut->save();
        return redirect('jasaangkut')->with('success', 'Data Berhasil Diedit');
    }

    function edit(Jasaangkut $jasaangkut)
    {
        $data['jasaangkut'] = $jasaangkut;
        return view('admin.jasaangkut.edit');
    }

    function destroy(Jasaangkut $jasaangkut)
    {
        $jasaangkut->delete();
        $jasaangkut->handleDeleteFoto();
        return redirect('jasaangkut')->with('danger', 'Data Berhasil DiHapus');
    }
}
