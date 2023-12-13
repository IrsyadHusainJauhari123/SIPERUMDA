<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Berita;
use App\Models\StukturAnggota;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('frontview.beranda');
    }

    // function visimisi()
    // {
    //     return view('frontview.visimisi');
    // }
    function struktur()
    {
        return view('frontview.struktur');
    }
    // function bisnis()
    // {
    //     return view('frontview.bisnis');
    // }

    function VisiMisi()
    {
        $data['visi'] = Profil::where('level', 'Visi')->get();
        $data['misi'] = Profil::where('level', 'Misi')->get();
        return view('frontview.profil.visimisi', $data);
    }

    function Sejarah()
    {
        $data['sejarah'] = Profil::where('level', 'Sejarah')->get();
        return view('frontview.profil.sejarah', $data);
    }

    function Bisnis()
    {
        return view('frontview.bisnis.bisnis');
    }
    function StukturAnggota()
    {
        $data['direktur_utama'] = StukturAnggota::where('level', 'Direktur_Utama')->get();
        $data['bupati'] = StukturAnggota::where('level', 'Bupati')->get();
        $data['wakil_bupati'] = StukturAnggota::where('level', 'Wakil_Bupati')->get();
        $data['direktur_utama'] = StukturAnggota::where('level', 'Direktur_Utama')->get();
        $data['direktur_teknis'] = StukturAnggota::where('level', 'Direktur_Teknis')->get();
        $data['direktur_keuangan'] = StukturAnggota::where('level', 'Direktur_Keuangan')->get();
        $data['dewan_pengawas'] = StukturAnggota::where('level', 'Dewan_Pengawas')->get();
        return view('frontview.profil.stukturanggota', $data);
    }
    function Berita()
    {
        $data['list_berita'] = Berita::all();
        return view('frontview.informasi.berita', $data);
    }
}
