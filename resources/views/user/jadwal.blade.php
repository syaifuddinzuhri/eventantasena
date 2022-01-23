@extends('user.layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1>JADWAL</h1>
            <h2>Jadwal kegiatan lomba ANTASENA 2022</h2>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-lines-fill get-started-icon"></i>
                <a href="#contact" class="btn-get-started scrollto">Lihat jadwal</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main" style="margin-top: 150px;">
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-up">Jadwal Kegiatan Lomba</h2>
                    {{-- <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
                        aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et
                        nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic
                        quas.</p> --}}
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up">
                        <div class="box">
                            <h3>ISC</h3>
                            <ul>
                                @if ($data->jadwals)
                                    @foreach ($data->jadwals as $item)
                                        @if ($item->kategori_lomba->type == 'isc')
                                            <li class="text-uppercase font-weight-bold">{{ $item->nama }}</li>
                                            <li class="text-danger">
                                                {{ date('d M Y', strtotime($item->start)) }}
                                                -
                                                {{ date('d M Y', strtotime($item->end)) }}
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                            {{-- <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>FIQSI</h3>
                            <ul>
                                @if ($data->jadwals)
                                    @foreach ($data->jadwals as $item)
                                        @if ($item->kategori_lomba->type == 'fiqsi')
                                            <li class="text-uppercase font-weight-bold">{{ $item->nama }}</li>
                                            <li class="text-danger">
                                                {{ date('d M Y', strtotime($item->start)) }}
                                                -
                                                {{ date('d M Y', strtotime($item->end)) }}
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                            {{-- <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <h3>OSIRIS</h3>
                            <ul>
                                @if ($data->jadwals)
                                    @foreach ($data->jadwals as $item)
                                        @if ($item->kategori_lomba->type == 'osiris')
                                            <li class="text-uppercase font-weight-bold">{{ $item->nama }}</li>
                                            <li class="text-danger">
                                                {{ date('d M Y', strtotime($item->start)) }}
                                                -
                                                {{ date('d M Y', strtotime($item->end)) }}
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                            {{-- <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <span class="advanced">NEW</span>
                            <h3>GATRA</h3>
                            <ul>
                                @if ($data->jadwals)
                                    @foreach ($data->jadwals as $item)
                                        @if ($item->kategori_lomba->type == 'gatra')
                                            <li class="text-uppercase font-weight-bold">{{ $item->nama }}</li>
                                            <li class="text-danger">
                                                {{ date('d M Y', strtotime($item->start)) }}
                                                -
                                                {{ date('d M Y', strtotime($item->end)) }}
                                            </li>
                                            <hr>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                            {{-- <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->
    </main><!-- End #main -->
@endsection
