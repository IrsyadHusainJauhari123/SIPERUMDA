<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pembenihan;
use App\Models\Pemerintahan;
use Auth;

class PembenihanController extends Controller
{
    function index()
    {
        $data['list_pembenihan'] = Pembenihan::all();
        // return $data;
        return view('admin.pembenihan.index', $data);
    }

    function create()
    {
        return view('admin.pembenihan.create');
    }

    function store()
    {
        $pembenihan = new Pembenihan();
        // $pembenihan->judul = request('judul');
        $pembenihan->nama_bisnis = request('nama_bisnis');
        $pembenihan->keterangan = request('keterangan');
        $pembenihan->HandleUploadFoto();
        $pembenihan->save();
        return redirect('pembenihan')->with('success', 'Data Berhasil DiUpload');
    }

    function show(Pembenihan $pembenihan)
    {
        $data['pembenihan'] = $pembenihan;
        return view('pembenihan.show', $data);
    }


    function update(Pembenihan $pembenihan)
    {
        // $pembenihan->judul = request('judul');
        $pembenihan->nama_bisnis = request('nama_bisnis');
        $pembenihan->keterangan = request('keterangan');
        $pembenihan->HandleUploadFoto();
        $pembenihan->save();
        return redirect('pembenihan')->with('success', 'Data Berhasil Diedit');
    }

    function edit(Pembenihan $pembenihan)
    {
        $data['pembenihan'] = $pembenihan;
        return view('admin.pembenihan.edit');
    }

    function destroy(Pembenihan $pembenihan)
    {
        $pembenihan->delete();
        $pembenihan->handleDeleteFoto();
        return redirect('pembenihan')->with('danger', 'Data Berhasil DiHapus');
    }
}
