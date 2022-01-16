@extends('user.layouts.app')

@section('title', 'Kategori gatra')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1>{{ $data->gatra->judul_singkat }} - {{ $data->gatra->judul_panjang }}</h1>
            <h2>{{ $data->gatra->tema }}</h2>
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
                        <img src="{{ $data->gatra->logo ? $data->gatra->logo : asset('assets/img/logo.png') }}"
                            class="w-50" alt="">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h4 data-aos="fade-up">Tentang {{ $data->gatra->judul_singkat }}</h4>
                        <h3 data-aos="fade-up">{{ $data->gatra->judul_panjang }}</h3>
                        <p data-aos="fade-up">{{ $data->gatra->deskripsi }}</p>
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
                        @if ($data->gatra->cabangs)
                            @foreach ($data->gatra->cabangs as $item)
                                <div
                                    class="col-md-4 col-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                                    <div class="icon-box" data-aos="fade-up">
                                        <div class="icon">
                                            <img src="{{$item->gambar}}" class="rounded-circle" width="50" height="50" alt="">
                                        </div>
                                        <h4 class="title">{{$item->judul}}</h4>
                                        <p class="description">{{ Str::limit($item->deskripsi, 100, '...')}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </section><!-- End About Section -->

    </main><!-- End #main -->
@endsection
