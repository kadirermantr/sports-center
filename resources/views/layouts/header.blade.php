<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sports Center</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<nav class="navbar navbar-expand-xl navbar-light" style="background-color: #f5f4f4;">
    <a href="/" class="navbar-brand"><i class="fa fa-star"></i>Sports<b>Center</b></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <a href="{{ url('/')}}" class="nav-item nav-link {{ Route::is('index') ? 'active' : '' }}">Anasayfa</a>
            <a href="{{ url('/hakkimizda')}}" class="nav-item nav-link {{ Route::is('about-us') ? 'active' : '' }}">Hakkımızda</a>
            <a href="{{ url('/salonlar')}}" class="nav-item nav-link {{ Route::is('gyms') ? 'active' : '' }}">Salonlar</a>
            <a href="{{ url('/blog')}}" class="nav-item nav-link {{ Route::is('blog') ? 'active' : '' }}">Blog</a>
            <a href="{{ url('/galeri')}}" class="nav-item nav-link {{ Route::is('gallery') ? 'active' : '' }}">Galeri</a>
            <a href="{{ url('/iletisim')}}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">İletişim</a>
        </div>

        <div class="navbar-nav ml-auto">

            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-primary"> {{ __('Oturum Aç') }}</a></a>
                @endif

            @else
                <div class="nav-item dropdown">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </button>

                        <div class="dropdown-menu">
                            <a href="{{ url('/account')}}" class="dropdown-item">Hesabım</a>
                            <a href="{{ url('/gym-register')}}" class="dropdown-item">Spor Salonu</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                {{ __('Oturumu Kapat') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            @endguest

        </div>
    </div>
</nav>
