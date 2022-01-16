@extends('user.layouts.app')

@section('title', 'Berkas')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1>BERKAS</h1>
            <h2>Berkas yang harus disiapkan bagi peserta</h2>
            <div class="d-flex align-items-center">
                <i class="bi bi-card-checklist get-started-icon"></i>
                <a href="#services" class="btn-get-started scrollto">Lihat berkas</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main" style="margin-top: 150px;">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Berkas</h2>
                    <p>Berkas yang harus disiapkan dan dipenuhi bagi peserta ANTASENA</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <img src="{{ asset('assets/img/logo.png') }}"
                                class="w-100 my-3" alt="">
                            <h4 class="title"><a href="">ISC</a></h4>
                            <a href="" class="btn btn-orange">Lihat Berkas</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <img src="{{ asset('assets/img/logo.png') }}"
                                class="w-100 my-3" alt="">
                            <h4 class="title"><a href="">FIQSI</a></h4>
                            <a href="" class="btn btn-orange">Lihat Berkas</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <img src="{{ asset('assets/img/logo.png') }}"
                                class="w-100 my-3" alt="">
                            <h4 class="title"><a href="">OSIRIS</a></h4>
                            <a href="" class="btn btn-orange">Lihat Berkas</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <img src="{{ asset('assets/img/logo.png') }}"
                                class="w-100 my-3" alt="">
                            <h4 class="title"><a href="">GATRA</a></h4>
                            <a href="" class="btn btn-orange">Lihat Berkas</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
@endsection
