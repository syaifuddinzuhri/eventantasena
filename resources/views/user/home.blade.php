@extends('user.layouts.app')

@section('title', 'ANTASENA 2022 | SMAU BP AMANATUL UMMAH')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1>ANTASENA 2022</h1>
            <h2>"achievers of national youth, achieve dreams full of actions"</h2>
            <div class="d-flex align-items-center">
                <i class="bx bxs-calendar get-started-icon"></i>
                <a href="#about" class="btn-get-started scrollto">13 Maret - 3 April 2021</a>
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
                                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="{{ asset('assets/img/logo.png') }}"
                                            width="200" alt="">
                                        <h4 class="mt-3">Corporis voluptates sit</h4>
                                        <p>Consequuntur sunt aut quasaboris nisi ut
                                            aliquip</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="{{ asset('assets/img/logo.png') }}"
                                            width="200" alt="">
                                        <h4 class="mt-3">Corporis voluptates sit</h4>
                                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                            aliquip</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="{{ asset('assets/img/logo.png') }}"
                                            width="200" alt="">
                                        <h4 class="mt-3">Ullamco laboris ladore pan</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="{{ asset('assets/img/logo.png') }}"
                                            width="200" alt="">
                                        <h4 class="mt-3">Labore consequatur</h4>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                        </p>
                                    </div>
                                </div>
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
                        <img src="{{ asset('assets/img/logo.png') }}" class="w-50" alt="">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h4 data-aos="fade-up">Seputar Antasena</h4>
                        <h3 data-aos="fade-up">ANTASENA 2022</h3>
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

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials"
            style="background-image: url({{ asset('assets/img/hero.png') }});">
            <div class="container position-relative" data-aos="fade-up">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/logo.png') }}"
                                width="100" alt="" style="position: absolute; top: 0; left: 0;">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/logo.png') }}"
                                    width="200" alt="">
                                <h3>Saul Goodman</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/logo.png') }}"
                                    width="200" alt="">
                                <h3>Sara Wilsson</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/logo.png') }}"
                                    width="200" alt="">
                                <h3>Jena Karlis</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/logo.png') }}"
                                    width="200" alt="">
                                <h3>Matt Brandon</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/logo.png') }}"
                                    width="200" alt="">
                                <h3>John Larson</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

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
                        <div class="swiper-slide"><img src="{{ asset('assets/users') }}/assets/img/clients/client-1.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/users') }}/assets/img/clients/client-2.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/users') }}/assets/img/clients/client-3.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/users') }}/assets/img/clients/client-4.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/users') }}/assets/img/clients/client-5.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/users') }}/assets/img/clients/client-6.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/users') }}/assets/img/clients/client-7.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/users') }}/assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->


    </main><!-- End #main -->
@endsection
