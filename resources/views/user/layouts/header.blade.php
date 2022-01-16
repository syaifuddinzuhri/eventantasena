<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Antasena 2022 adalah kompetisi olimpiade dan seni tahunan yang diselenggarakan oleh siswa-siswi SMAU BP Amanatul Ummah, Mojokerto. dimana kompetisi ini terdiri dari 3 cabang lomba yakni islamic scout competition (ISC), festival qur'ani dan seni islami (FIQSI), dan olimpiade sains remaja indonesia (OSIRIS)" />
    <meta name="keywords" content="event antasena,antasena,event,ANTASENA 2022 | SMAU BP AMANATUL UMMAH" />
    <meta name="author" content="ANTASENA 2022 | SMAU BP AMANATUL UMMAH" />

    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href="{{ $data->profil->logo_favicon ? $data->profil->logo_favicon : asset('assets/img/image.png') }}" rel="icon">
    <link href="{{ $data->profil->logo_favicon ? $data->profil->logo_favicon : asset('assets/img/image.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/users') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/users') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/users') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/users') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/users') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets/users') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/users') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Flexor - v4.7.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <!-- ======= Top Bar ======= -->
    {{-- <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>

            <div class="cta d-none d-md-flex align-items-center">
                <a href="{{route('user.berkas')}}" class=">REGISTRASI SEKARANG</a>
            </div>
        </div>
    </section> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center py-2 head">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="{{route('user.home')}}"><img
                    src="{{ $data->profil->logo_web ? $data->profil->logo_web : asset('assets/img/image.png') }}"
                    height="70" width="210" alt=""></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link text-white" href="{{route('user.home')}}">Beranda</a></li>
                    <li class="dropdown"><a href="#" class="nav-link-dropdown text-white"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{route('user.isc')}}">ISC</a></li>
                            <li><a href="{{route('user.fiqsi')}}">FIQSI</a></li>
                            <li><a href="{{route('user.osiris')}}">OSIRIS</a></li>
                            <li><a href="{{route('user.gatra')}}">GATRA</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link text-white" href="{{route('user.berkas')}}">Berkas</a></li>
                    <li><a class="nav-link text-white" href="{{route('user.registrasi')}}">Registrasi</a></li>
                    <li class="dropdown"><a href="#" class="nav-link-dropdown text-white"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{route('user.jadwal')}}">Jadwal</a></li>
                            <li><a href="{{route('user.galeri')}}">Galeri</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link text-white " href="{{route('user.kontak')}}">Kontak</a></li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
