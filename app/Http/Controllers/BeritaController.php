<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use App\Models\User;

use Auth;

class BeritaController extends Controller
{

    function index()
    {
        $data['list_berita'] = Berita::all();
        return view('admin.berita.index', $data);
    }

    // function CariBerita()
    // {
    //     $judul = request('judul');
    //     $data['list_berita'] = Berita::where('judul', 'like', "%$judul%")->paginate(5);
    //     $data['judul'] = $judul;
    //     return view('admin.Berita.index', $data);
    // }
    function create()
    {
        return view('admin.berita.create');
    }

    function CariBerita()
    {
        $judul = request('judul');
        $data['list_berita'] = Berita::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('admin.Berita.index', $data);
    }


    function store()
    {
        $berita = new Berita;
        // $berita->user_id = Auth::user()->id;
        $berita->judul = request('judul');
        $berita->tanggal = request('tanggal');
        $berita->nama_pembuat = request('nama_pembuat');
        $berita->keterangan = request('keterangan');
        // $berita->foto1 = request('foto1');
        // $berita->foto2 = request('foto2');
        // $berita->HandleUploadFoto();
        $berita->save();

        return redirect('berita')->with('success', 'Data Berhasil Ditambah');
    }

    function show(Berita $berita)
    {
        $data['berita'] = $berita;
        return view('berita.show', $data);
    }

    function edit(Berita $berita)
    {
        $data['berita'] = $berita;
        return view('admin.berita.edit', $data);
    }

    function update(Berita $berita)
    {
        $berita->judul = request('judul');
        $berita->tanggal = request('tanggal');
        $berita->nama_pembuat = request('nama_pembuat');
        $berita->keterangan = request('keterangan');
        // $berita->foto1 = request('foto1');
        $berita->HandleUploadFoto();
        $berita->save();

        return redirect('berita')->with('success', 'Data Berhasil Diedit');
    }

    function destroy(Berita $berita)
    {
        $berita->delete();
        $berita->handleDeleteFoto();
        return redirect('berita')->with('danger', 'Data Berhasil DiHapus');
    }
}
