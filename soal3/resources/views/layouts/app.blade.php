<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Bank Sederhana</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{!! asset('vendor/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/fontawesome/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/fontawesome/css/fontawesome.min.css') !!}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{!! asset('vendor/jqvmap/dist/jqvmap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/summernote/summernote-bs4.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/owlcarousel2/dist/assets/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/owlcarousel2/dist/assets/owl.theme.default.min.css') !!}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{!! asset('vendor/stisla/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/stisla/css/components.css') !!}">
    @yield('css')
</head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{!! asset('vendor/stisla/img/avatar/avatar-1.png') !!}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hai, {!! Auth::user()->name !!}</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">Bank Sederhana</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">BS</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="nav-item {{ Request::is(['home*','/']) ? 'active' : '' }}">
                        <a href="{!! route('home') !!}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                    </li>
                    <li class="nav-item {{ Request::is('accounts*') ? 'active' : '' }}">
                        <a href="{!! route('accounts.index') !!}" class="nav-link"><i class="fas fa-file-alt"></i><span>Rekening Saya</span></a>
                    </li>
                    <li class="menu-header">Laporan</li>
                    <li class="nav-item {{ Request::is('mutations*') ? 'active' : '' }}">
                        <a href="{!! route('mutations.index') !!}" class="nav-link"><i class="fas fa-pencil-ruler"></i> <span>Laporan Mutasi</span></a>
                    </li>
                </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div>Stisla Admin Template Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{!! asset('vendor/jquery.min.js') !!}"></script>
<script src="{!! asset('vendor/popper.js') !!}"></script>
<script src="{!! asset('vendor/tooltip.js') !!}"></script>
<script src="{!! asset('vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('vendor/nicescroll/jquery.nicescroll.min.js') !!}"></script>
<script src="{!! asset('vendor/moment.min.js') !!}"></script>
<script src="{!! asset('vendor/stisla/js/stisla.js') !!}"></script>

<!-- JS Libraies -->
<script src="{!! asset('vendor/jquery.sparkline.min.js') !!}"></script>
<script src="{!! asset('vendor/chart.min.js') !!}"></script>
<script src="{!! asset('vendor/owlcarousel2/dist/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('vendor/summernote/summernote-bs4.js') !!}"></script>
<script src="{!! asset('vendor/chocolat/dist/js/jquery.chocolat.min.js') !!}"></script>

<!-- Page Specific JS File -->
<script src="{!! asset('vendor/stisla/js/page/index.js') !!}"></script>

<!-- Template JS File -->
<script src="{!! asset('vendor/stisla/js/scripts.js') !!}"></script>
<script src="{!! asset('vendor/stisla/js/custom.js') !!}"></script>
@yield('scripts')
</body>
</html>
