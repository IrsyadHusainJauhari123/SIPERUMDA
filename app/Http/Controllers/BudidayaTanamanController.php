<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BudidayaTanaman;

use Auth;

class BudidayaTanamanController extends Controller
{

    function index()
    {
        $data['list_budidayatanaman'] = BudidayaTanaman::all();
        // return $data;
        return view('admin.budidayatanaman.index', $data);
    }


    function create()
    {
        return view('admin.budidayatanaman.create');
    }

    function store()
    {
        $budidayatanaman = new BudidayaTanaman();
        // $budidayatanaman->judul = request('judul');
        $budidayatanaman->nama_bisnis = request('nama_bisnis');
        $budidayatanaman->keterangan = request('keterangan');
        $budidayatanaman->HandleUploadFoto();
        $budidayatanaman->save();
        return redirect('budidayatanaman')->with('success', 'Data Berhasil DiUpload');
    }

    function show(BudidayaTanaman $budidayatanaman)
    {
        $data['budidayatanaman'] = $budidayatanaman;
        return view('budidayatanaman.show', $data);
    }


    function update(BudidayaTanaman $budidayatanaman)
    {
        // $budidayatanaman->judul = request('judul');
        $budidayatanaman->nama_bisnis = request('nama_bisnis');
        $budidayatanaman->keterangan = request('keterangan');
        $budidayatanaman->HandleUploadFoto();
        $budidayatanaman->save();
        return redirect('budidayatanaman')->with('success', 'Data Berhasil Diedit');
    }

    function edit(BudidayaTanaman $budidayatanaman)
    {
        $data['budidayatanaman'] = $budidayatanaman;
        return view('admin.budidayatanaman.edit');
    }

    function destroy(budidayatanaman $budidayatanaman)
    {
        $budidayatanaman->delete();
        $budidayatanaman->handleDeleteFoto();
        return redirect('budidayatanaman')->with('danger', 'Data Berhasil DiHapus');
    }
}
