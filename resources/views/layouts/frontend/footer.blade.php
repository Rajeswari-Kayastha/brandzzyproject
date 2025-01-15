<!-- ======= Footer ======= -->
<div class="newsletter-area" style="background-color:#147cc1;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5 mb-30">
                <div class="newsletter-text">
                    <h1 class="text-white">
                        Subscribe Our Newsletter <br> To Get More Update</h1>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 mb-30">
                <div class="single-newsletters">
                    <div class="newsletter-form">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="email" placeholder="Your email">
                            </div>
                            <div class="col-md-4">
                                <button>Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer">

    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Brandzzy</span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
            <a href="" target="_blank" class="facebook"><i
                    class="bx bxl-facebook"></i></a>
            <a href="" target="_blank" class="instagram"><i
                    class="bx bxl-instagram"></i></a>
            <a href="" target="_blank" class="linkedin"><i
                    class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('frontend/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="{{ asset('toastr/toastr.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

<script>
    if ("{{ !empty(session('success')) }}") {

        successMsg("{{ session('success') }}")

    }

    if ("{{ !empty(session('error')) }}") {

        errorMsg("{{ session('error') }}")

    }
</script>



</body>

</html>
