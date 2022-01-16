@extends('user.layouts.app')

@section('title', 'Kategori ISC')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1>isc</h1>
            <h2>Kamu bisa menghubungi kami melalui sosial media kami</h2>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-lines-fill get-started-icon"></i>
                <a href="#about" class="btn-get-started scrollto">Lihat detail</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main" style="margin-top: 150px;">
        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch position-relative"
                        data-aos="fade-right">
                        <img src="{{ asset('assets/img/logo.png') }}" class="w-50" alt="">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h4 data-aos="fade-up">Tentang ISC</h4>
                        <h3 data-aos="fade-up">Islamic Scout Competition</h3>
                        <p data-aos="fade-up">Antasena 2021 adalah kompetisi olimpiade dan seni tahunan yang diselenggarakan
                            oleh siswa-siswi SMA Unggulan Berbasis Pesantren Amanatul Ummah, Mojokerto. dimana kompetisi ini
                            terdiri dari 3 cabang lomba yakni Islamic Scout Competition (ISC), Festival Qur'ani dan Seni
                            Islami (FIQSI), dan Olimpiade Sains Remaja Indonesia (OSIRIS). Antasena 2021 merupakan saat
                            dimana para peserta dapat mengasah pengetahuan, ketrampilan, dan kreativitas dengan kemajuan
                            teknologi sehingga dapat mengembangkan minat dan bakat</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <!-- ======= About Section ======= -->
        <section class="about">
            <section>
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-12 text-center">
                            <h1>Cabang Lomba</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="col-md-4 col-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                <h4 class="title">Lorem Ipsum</h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas</p>
                            </div>
                        </div>
                        <div
                            class="col-md-4 col-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                <h4 class="title">Lorem Ipsum</h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas</p>
                            </div>
                        </div>
                        <div
                            class="col-md-4 col-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                <h4 class="title">Lorem Ipsum</h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

    </main><!-- End #main -->
@endsection
