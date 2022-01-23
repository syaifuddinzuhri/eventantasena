@extends('user.layouts.app')

@section('title', 'Galeri')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1>GALERI KEGIATAN</h1>
            <h2>Kumpulan foto dokumentasi kegiatan</h2>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-lines-fill get-started-icon"></i>
                <a href="#portfolio" class="btn-get-started scrollto">Lihat galeri</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main" style="margin-top: 150px;">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-up">Galeri Kegiatan</h2>
                    {{-- <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga
                        eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit
                        suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @if ($data->galeris)

                        @foreach ($data->galeris as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <img src="{{ $item->gambar }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <p>{{$item->nama}}</p>
                                    <a href="{{ $item->gambar }}"
                                        class="portfolio-lightbox preview-link" title="App 1"><i
                                            class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

            </div>
        </section><!-- End Portfolio Section -->
    </main><!-- End #main -->
@endsection
