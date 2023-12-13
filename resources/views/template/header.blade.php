@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-envelope"></i>ketapang.pangan.mandiri@gmail.com
                        </a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>1222000662218
                        </a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ url('/') }}/assets/images/kpm3.png"
                    alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;"></a>
            <!-- <div class="brand">
    <a href="crm-index.html" class="logo">
            <span>
                <img src="{{ url('/') }}/assets/images/ktp.jpg" alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;" >
            </span>
        </a>
    </div> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('beranda') }}" href="{{ url('beranda') }}">Beranda
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link  " data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Profil</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('frontview/profil/visimisi') }}">Visi Misi</a>
                            <a class="dropdown-item" href="{{ url('frontview/profil/sejarah') }}">Sejarah</a>
                            <a class="dropdown-item" href="{{ url('frontview/profil/stukturanggota') }}">Struktur
                                Anggota</a>
                            <!-- <a class="dropdown-item" href="testimonials.html">Testimonials</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="terms.html">Terms</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link  " data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Informasi</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('frontview/informasi/berita') }}">Berita</a>
                            {{-- <a class="dropdown-item" href="{{ url('frontview/informasi/beritadetail') }}">Berita
                                Detail</a> --}}
                            <a class="dropdown-item" href="{{ url('frontview/informasi/kegiatan') }}">Kegiatan</a>
                            {{-- <a class="dropdown-item" href="{{ url('frontview/informasi/kegiatandetail') }}">Kegiatan
                                detail</a> --}}
                            <!-- <a class="dropdown-item" href="testimonials.html">Testimonials</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="terms.html">Terms</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('bisnis') }}"
                            href="{{ url('frontview/bisnis/bisnis') }}">Bisnis</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('visimisi') }}" href="{{ url('visimisi') }}">Visi
                            Misi</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link  " data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">More</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('struktur') }}">Struktur</a>
                            <a class="dropdown-item" href="about.html">About Us</a>
                            <a class="dropdown-item" href="blog.html">Blog</a>
                            <!-- <a class="dropdown-item" href="testimonials.html">Testimonials</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="terms.html">Terms</a> -->
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>
