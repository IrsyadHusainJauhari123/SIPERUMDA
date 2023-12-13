@extends('template.base')
@section('title', 'StukturAnggota')
@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>STRUKTUR ANGGOTA PERUSAHAAN</h1>
                    <span>PERUMDA KETAPANG PANGAN MANDIRI</span>
                </div>
            </div>
        </div>
    </div>

    <div class="team" style="margin: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>STRUKTUR<em> PERUSAHAAN</em></h2>
                        <span>Perumda Ketapang Pangan Mandiri</span>
                    </div>
                </div>
                <div class="col-md-4">
                    @foreach ($bupati as $bupati)
                        <div class="team-item">
                            <img src="{{ url("$bupati->foto") }}" alt="">
                            <div class="down-content">
                                <h4 style="text-align: center">{{ $bupati->nama_anggota }}
                                </h4>
                                <span style="text-align: center">{{ $bupati->level }}
                                </span>
                                <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                    <p>
                                                                                                                                                                                      <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                    </p> -->
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-4">
                    @foreach ($wakil_bupati as $wakil_bupati)
                        <div class="team-item">
                            <img src="{{ url("$wakil_bupati->foto") }}" alt="">
                            <div class="down-content">
                                <h4 style="text-align: center">{{ $wakil_bupati->nama_anggota }}
                                </h4>
                                <span style="text-align: center">{{ $wakil_bupati->level }}
                                </span>
                                <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="col-md-4">
                    @foreach ($direktur_utama as $direktur_utama)
                        <div class="team-item">
                            <img src="{{ url("$direktur_utama->foto") }}" alt="">
                            <div class="down-content">
                                <h4 style="text-align: center">{{ $direktur_utama->nama_anggota }}
                                </h4>
                                <span style="text-align: center">{{ $direktur_utama->level }}
                                </span>
                                <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    @foreach ($direktur_teknis as $direktur_teknis)
                        <div class="team-item">
                            <img src="{{ url("$direktur_teknis->foto") }}" alt="">
                            <div class="down-content">
                                <h4 style="text-align: center">{{ $direktur_teknis->nama_anggota }}
                                </h4>
                                <span style="text-align: center">{{ $direktur_teknis->level }}
                                </span>
                                <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-md-4">
                    @foreach ($direktur_keuangan as $direktur_keuangan)
                        <div class="team-item">
                            <img src="{{ url("$direktur_keuangan->foto") }}" alt="">
                            <div class="down-content">
                                <h4 style="text-align: center">{{ $direktur_keuangan->nama_anggota }}
                                </h4>
                                <span style="text-align: center">{{ $direktur_keuangan->level }}
                                </span>
                                <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-md-4">
                    @foreach ($dewan_pengawas as $dewan_pengawas)
                        <div class="team-item">
                            <img src="{{ url("$dewan_pengawas->foto") }}" alt="">
                            <div class="down-content">
                                <h4 style="text-align: center">{{ $dewan_pengawas->nama_anggota }}
                                </h4>
                                <span style="text-align: center">{{ $dewan_pengawas->level }}
                                </span>
                                <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{ url('public/template') }}/assets/images/team-image-2-646x680.jpg" alt="">
                        <div class="down-content">
                            <h4>TRIAN ADIMARTA, STP, M.Sc
                            </h4>
                            <span>ANGGOTA DEWAN PENGAWAS
                            </span>
                            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{ url('public/template') }}/assets/images/team-image-3-646x680.jpg" alt="">
                        <div class="down-content">
                            <h4>IR. SAPRAN DARIUS
                            </h4>
                            <span>DIREKTUR OPERASIONAL/TEKNIK
                            </span>
                            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{ url('public/template') }}/assets/images/team-image-1-646x680.jpg" alt="">
                        <div class="down-content">
                            <h4>M. EFFENDI, SE
                            </h4>
                            <span>DIREKTUR ADMINISTRASI/
                                KEUANGAN
                            </span>
                            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>

                                                                                                                                                                                        <p>
                                                                                                                                                                                          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                                                                                                                                                                        </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
