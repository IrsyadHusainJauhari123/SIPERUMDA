@php
    
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">

        <ul class="side-menu metismenu">
            {{-- <li>
                <a class="active" href="{{ url('beranda') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">beranda</span>
                </a>
            </li> --}}
            <li class="heading">Main Menu</li>
            <li class="nav-item">
                <a href="{{ url('dashborad') }}" class="nav-link {{ checkRouteActive('dashborad') }}">
                    <i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('profil') }}" class="nav-link {{ checkRouteActive('profil') }}">
                    <i class="sidebar-item-icon fa fa-home"></i>
                    <span class="nav-label">Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('stukturanggota') }}" class="nav-link {{ checkRouteActive('stukturanggota') }}">
                    <i class="sidebar-item-icon fa fa-handshake-o"></i>
                    <span class="nav-label">Stuktur Anggota</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('berita') }}" class="nav-link {{ checkRouteActive('berita') }}">
                    <i class="sidebar-item-icon fa fa-newspaper-o"></i>
                    <span class="nav-label">Berita</span>
                </a>
            </li>

            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-building"></i>
                    <span class="nav-label">Program Bisnis</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{ url('budidayatanaman') }}"
                            class="nav-link {{ checkRouteActive('budidayatanaman') }}">Budidaya Tanaman</a>
                    </li>
                    <li>
                        <a href="{{ url('perdagangan') }}" class="nav-link {{ checkRouteActive('perdagangan') }}">
                            <i class=""></i>Perdagangan/pembibitan</a>
                    </li>
                    <li>
                        <a href="{{ url('pembenihan') }}" class="nav-link {{ checkRouteActive('pembenihan') }}">
                            <i class=""></i>Pembenihan</a>
                    </li>
                    <li>
                        <a href="{{ url('padi') }}" class="nav-link {{ checkRouteActive('pembenihan') }}">
                            <i class=""></i>Pabrik Pengilingan padi</a>
                    </li>
                    <li>
                        <a href="{{ url('jasaangkut') }}" class="nav-link {{ checkRouteActive('jasaangkut') }}">
                            <i class=""></i>Jasa Angkut</a>
                    </li>
                    <li>
                        <a href="{{ url('pupuk') }}" class="nav-link {{ checkRouteActive('pupuk') }}">
                            <i class=""></i>Distribusi Pupuk</a>
                    </li>
                    <li>
                        <a href="mail_compose.html">Compose mail</a>
                    </li>
                </ul>

            <li class="nav-item">
                <a href="{{ url('user') }}" class="nav-link {{ checkRouteActive('user') }}">
                    <i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label">User</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('login') }}" class="nav-link {{ checkRouteActive('logout') }}">
                    <i class="sidebar-item-icon fa fa-power-off"></i>
                    <span>
                        LOG-OUT
                    </span>
                </a>
            </li>
            </li>
        </ul>
    </div>
</nav>
