<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/front/img/favicon.png" rel="icon">
    <link href="/assets/front/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="/assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/front/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/assets/front/css/variables.css" rel="stylesheet">
    <link href="/assets/front/css/variables-blue.css" rel="stylesheet">


    <link href="/assets/front/css/main.css" rel="stylesheet">
    <link href="/assets/front/css/style.css" rel="stylesheet">


    @yield('style')
    @livewireStyles
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header" data-scrollto-offset="0" dir="rtl">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index.html#about">تماس با ما</a></li>
                <li><a class="nav-link scrollto" href="index.html#about">درباره ما</a></li>
                <li><a class="nav-link scrollto" href="index.html#services">خدمات</a></li>
                <li><a class="nav-link scrollto" href="index.html#portfolio">مقالات</a></li>
                <li><a class="nav-link scrollto" href="index.html#contact">صفحه اصلی</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <a class="btn-getstarted" style="font-family: 'iran-yekan', serif" href="#">ورود یا ثبت نام</a>

    </div>
</header><!-- End Header -->


<main id="main">

    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>HeroBiz</h3>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-legal text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="/assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/front/vendor/aos/aos.js"></script>
<script src="/assets/front/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/front/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/front/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/assets/front/js/main.js"></script>

@livewireScripts

@yield('script')
</body>

</html>

