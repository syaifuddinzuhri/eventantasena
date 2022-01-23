@extends('user.layouts.app')

@section('title', 'ANTASENA 2022 | SMAU BP AMANATUL UMMAH')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1 class="text-uppercase">{{ $data->profil ? $data->profil->judul : null }}</h1>
            <h2>"{{ $data->profil ? $data->profil->deskripsi : null }}"</h2>
            <div class="d-flex align-items-center">
                <i class="bx bxs-calendar get-started-icon"></i>
                <a href="#about"
                    class="btn-get-started scrollto">{{ date('d M Y', strtotime($data->profil ? $data->profil->start : null)) }}
                    -
                    {{ date('d M Y', strtotime($data->profil ? $data->profil->end : null)) }}</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                @if ($data->kategori)
                                    @foreach ($data->kategori as $item)
                                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <div class="icon-box mt-4 mt-xl-0">
                                                @if ($item->judul_singkat == 'GATRA')
                                                    <button type="button" class="btn btn-sm btn-danger" style="position: absolute; left: 20px; top: 10px">NEW</button>
                                                @endif
                                                <img src="{{ $item->logo ? $item->logo : asset('assets/img/image.png') }}"
                                                    width="200" height="200" alt="">
                                                <h6 class="mt-3">
                                                    {{ $item->judul_singkat ? $item->judul_singkat : '...' }}</h6>
                                                <h4>{{ $item->judul_panjang ? $item->judul_panjang : '...' }}</h4>
                                                <p>{{ Str::limit($item->deskripsi, 150, '...') }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch position-relative"
                        data-aos="fade-right">
                        <img src="{{ ($data->profil ? $data->profil->logo : null) ? ($data->profil ? $data->profil->logo : null) : asset('assets/img/image.png') }}"
                            class="w-50" alt="">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h4 data-aos="fade-up">Seputar Antasena</h4>
                        <h3 data-aos="fade-up">{{ $data->profil ? $data->profil->judul : null }}</h3>
                        <p data-aos="fade-up">{{ $data->profil ? $data->profil->deskripsi : null }}</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials"
            style="background-image: url({{ asset('assets/img/hero.png') }});">
            <div class="container position-relative" data-aos="fade-up">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @if ($data->kategori)
                            @foreach ($data->kategori as $item)
                                <div class="swiper-slide">
                                    <img src="{{ $item->maskot ? $item->maskot : asset('assets/img/image.png') }}"
                                        width="60" height="60" alt="" style="position: absolute; top: 0; left: 0;">
                                    <div class="testimonial-item">
                                        <img src="{{ $item->logo ? $item->logo : asset('assets/img/image.png') }}"
                                            width="200" height="200" alt="">
                                        <h3>{{ $item->judul_panjang ? $item->judul_panjang : '...' }}</h3>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{ Str::limit($item->deskripsi, 150, '...') }}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h1>Media Partner</h1>
                    </div>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @if ($data->partners)
                            @foreach ($data->partners as $item)
                                <div class="swiper-slide"><img src="{{ $item->gambar }}" class="img-fluid" alt="">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->
    </main><!-- End #main -->
@endsection
