@extends('user.layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});">
        <div class="container" data-aos="fade-in">
            <h1>KONTAK KAMI</h1>
            <h2>Kamu bisa menghubungi kami melalui sosial media kami</h2>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-lines-fill get-started-icon"></i>
                <a href="#contact" class="btn-get-started scrollto">Lihat kontak kami</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main" style="margin-top: 150px;">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-up">Kontak Kami</h2>
                    <p data-aos="fade-up">Kamu bisa menghubungi kami melalui sosial media kami</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>{{$data->kontak ? $data->kontak->email : ''}}</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Alamat Kami</h3>
                            <p>{{$data->kontak ? $data->kontak->alamat : ''}}</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-box">
                            <i class="bx bx-phone-call"></i>
                            <h3>No. WhatsApp</h3>
                            <p>{{$data->kontak ? $data->kontak->whatsapp : ''}}</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-xl-9 col-lg-12 mt-4">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama"
                                        required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Masukkan email" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukkan nomor handphone"
                                        required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan subjek"
                                            required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="pesan" rows="5" placeholder="Masukkan pesan"
                                    required></textarea>
                            </div>
                            <div class="text-center mt-3"><button type="submit">Submit</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
