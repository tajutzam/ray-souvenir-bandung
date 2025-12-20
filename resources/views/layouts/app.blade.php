<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Souvenir Karet Bandung | Custom Gelang & Gantungan Kunci – Ray’s Souvenir</title>

    <meta name="description"
        content="Ray’s Souvenir adalah produsen souvenir karet di Bandung. Custom gelang karet & gantungan kunci untuk event, perusahaan, dan komunitas.">


    <!-- SEO Essential -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Ray’s Souvenir Bandung">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph (Facebook, WhatsApp) -->
    <meta property="og:title" content="Souvenir Karet Bandung | Custom Gelang & Gantungan Kunci – Ray’s Souvenir">
    <meta property="og:description"
        content="Produsen souvenir karet Bandung. Custom gelang karet & gantungan kunci untuk event, perusahaan, dan komunitas.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('assets/img/seo/og-image.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Souvenir Karet Bandung – Ray’s Souvenir">
    <meta name="twitter:description" content="Produsen souvenir karet Bandung untuk event & perusahaan.">
    <meta name="twitter:image" content="{{ asset('assets/img/seo/og-image.jpg') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/animated-headline.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    @stack('styles')



</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/') }}/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('partials.navbar')
    <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>@yield('subtitle', 'ABOUT-US')</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        @yield('content')
    </main>


    @include('partials.footer')
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('/') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('/') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/') }}/assets/js/jquery.slicknav.min.js"></script>

    <script src="{{ asset('/') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/animated.headline.js"></script>
    <script src="{{ asset('/') }}/assets/js/jquery.magnific-popup.js"></script>

    <script src="{{ asset('/') }}/assets/js/gijgo.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/jquery.sticky.js"></script>

    <script src="{{ asset('/') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/hover-direction-snake.min.js"></script>

    <script src="{{ asset('/') }}/assets/js/contact.js"></script>
    <script src="{{ asset('/') }}/assets/js/jquery.form.js"></script>
    <script src="{{ asset('/') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/mail-script.js"></script>
    <script src="{{ asset('/') }}/assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="{{ asset('/') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('/') }}/assets/js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    @stack('js')
    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-in-out',
        });
    </script>


</body>

</html>