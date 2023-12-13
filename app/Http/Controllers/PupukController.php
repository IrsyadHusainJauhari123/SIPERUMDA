<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pupuk;
use App\Models\Pemerintahan;
use Auth;

class PupukController extends Controller
{
    function index()
    {
        $data['list_pupuk'] = Pupuk::all();
        // return $data;
        return view('admin.pupuk.index', $data);
    }

    function create()
    {
        return view('admin.pupuk.create');
    }

    function store()
    {
        $pupuk = new Pupuk();
        // $pupuk->judul = request('judul');
        $pupuk->nama_bisnis = request('nama_bisnis');
        $pupuk->keterangan = request('keterangan');
        $pupuk->HandleUploadFoto();
        $pupuk->save();
        return redirect('pupuk')->with('success', 'Data Berhasil DiUpload');
    }

    function show(Pupuk $pupuk)
    {
        $data['pupuk'] = $pupuk;
        return view('pupuk.show', $data);
    }


    function update(Pupuk $pupuk)
    {
        // $pupuk->judul = request('judul');
        $pupuk->nama_bisnis = request('nama_bisnis');
        $pupuk->keterangan = request('keterangan');
        $pupuk->HandleUploadFoto();
        $pupuk->save();
        return redirect('pupuk')->with('success', 'Data Berhasil Diedit');
    }

    function edit(Pupuk $pupuk)
    {
        $data['pupuk'] = $pupuk;
        return view('admin.pupuk.edit');
    }

    function destroy(Pupuk $pupuk)
    {
        $pupuk->delete();
        $pupuk->handleDeleteFoto();
        return redirect('pupuk')->with('danger', 'Data Berhasil DiHapus');
    }
}
