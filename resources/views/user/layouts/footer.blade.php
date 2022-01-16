<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <img src="{{ asset('assets/img/logo.png') }}"
                        width="210" alt="">
                    <p class="mt-4">
                        ANTASENA adalah salah satu program unggulan SMA Unggulan Berbasis Pesantren Amanatul Ummah
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Informasi</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Komplek PP. Amanatul Ummah, Jl. Raya KH.
                                Abdul Chalim No.1, Paras, Kembangbelor, Kec. Pacet, Mojokerto, Jawa Timur</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">antasenasmaubp@gmail.com</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Kontak Kami</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">085123456</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">085123456</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">085123456</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">085123456</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-100">
                </div>

            </div>
        </div>
    </div>

    <div class="container d-lg-flex py-4">

        <div class="me-lg-auto text-center text-lg-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Antasena</span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
            {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
            <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
            {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/users') }}/assets/vendor/aos/aos.js"></script>
<script src="{{ asset('assets/users') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/users') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('assets/users') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('assets/users') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/users') }}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/users') }}/assets/js/main.js"></script>

<script>
    var $test = document.getElementById('header'),
        $tOffset = $test.offsetTop,
        $tHeight = $test.clientHeight,
        $winH = window.innerHeight,
        $scrollY;


    function myFunction(x) {
        if (x.matches) {
            window.addEventListener('scroll', function() {
                $scrollY = window.scrollY;
                var head = document.getElementById("header");
                var elems = document.querySelectorAll(".nav-link");
                var elems2 = document.querySelectorAll(".nav-link-dropdown");
                if ($scrollY > ($tOffset + $tHeight)) {
                    [].forEach.call(elems, function(el) {
                        el.classList.remove("text-white");
                        el.classList.add("text-dark");
                    });
                    [].forEach.call(elems2, function(el) {
                        el.classList.remove("text-white");
                        el.classList.add("text-dark");
                    });
                } else {
                    [].forEach.call(elems, function(el) {
                        el.classList.add("text-dark");
                    });
                    [].forEach.call(elems2, function(el) {
                        el.classList.add("text-dark");
                    });
                }
            });
        } else {
            window.addEventListener('scroll', function() {
                $scrollY = window.scrollY;
                var head = document.getElementById("header");
                var elems = document.querySelectorAll(".nav-link");
                var elems2 = document.querySelectorAll(".nav-link-dropdown");
                if ($scrollY > ($tOffset + $tHeight)) {
                    head.classList.add("blur-header");
                    [].forEach.call(elems, function(el) {
                        el.classList.remove("text-white");
                    });
                    [].forEach.call(elems2, function(el) {
                        el.classList.remove("text-white");
                    });
                } else {
                    head.classList.remove("blur-header");
                    [].forEach.call(elems, function(el) {
                        el.classList.add("text-white");
                    });
                    [].forEach.call(elems2, function(el) {
                        el.classList.add("text-white");
                    });
                }
            });
        }
    }

    var x = window.matchMedia("(max-width: 960px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction)
</script>

</body>

</html>
