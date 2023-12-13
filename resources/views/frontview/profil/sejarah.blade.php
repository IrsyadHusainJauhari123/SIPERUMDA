@extends('template.base')
@section('title', 'Sejarah')
@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>SEJARAH</h1>
                    <span>Perumda Ketapang Pangan Mandiri</span>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($sejarah as $sejarah)
                        <div class="more-info-content">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="right-content">
                                        <span style="font-size: 60px", hei>{{ $sejarah->level }}</span>
                                        <hr>
                                        {{-- <h2>Get to know about <em>our company</em></h2> --}}
                                        <p>{{ $sejarah->keterangan }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="left-image">
                                        <img src="/kpm12.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
@endsection
