@extends('template.base')
@section('title', 'Visi Misi')
@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>VISI MISI</h1>
                    <span>Perumda Ketapang Pangan Mandiri</span>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials" style="margin: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">

                        <div class="testimonial-item">
                            @foreach ($visi as $visi)
                                <div class="inner-content">
                                    <h4>{{ $visi->level }}</h4>
                                    <span>Perumda KPM</span>
                                    <p>{{ $visi->keterangan }} <br><br><br></p>
                                </div>
                                <img src="{{ url('public/template') }}/assets/images/kpmori.png" alt="">
                            @endforeach
                        </div>

                        <div class="testimonial-item">
                            @foreach ($misi as $misi)
                                <div class="inner-content">
                                    <h4>{{ $misi->level }}</h4>
                                    <span>Perumda KPM</span>
                                    <p style="text-align: justify;">{{ $misi->keterangan }}</p>
                                </div>
                                <img src="{{ url('public/template') }}/assets/images/kpmori.png" alt="">
                            @endforeach
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
