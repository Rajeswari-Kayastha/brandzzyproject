<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta property="og:image" content="@yield('og_image')">
    <meta property="twitter:image" content="@yield('twitter_image')">
    <!-- Favicons -->
    <link href="" rel="icon">
    {{-- <link href="{{ asset('frontend/img/apple-touch-icon1.png') }}" rel="apple-touch-icon"> --}}
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('frontend/css/all.min.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>


    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <!-- <h1 class="logo me-auto me-lg-0"><a href="/"><span>.</span></a></h1>  -->
           
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li>
                        <a class="nav-link scrollto active" href="/">Home</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto"  href="">About</a>
                    </li>
                    <li class="has-children">
                        <a href="#">Services <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="megamenu megamenu--home-variation submenu">
                             <li class="menu-item col-title">
                                <a href="#" class="underline">OUR SERVICE</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="">Branding</a></li>
                                    <li class="menu-item"><a href="">Content
                                            Marketing Service</a></li>
                                    <li class="menu-item"><a href="">SEO Service</a></li>
                                    <li class="menu-item"><a href="">Google My
                                            Business Service
                                        </a></li>
                                    <li class="menu-item"><a href="">Social Media
                                            Service</a></li>
                                    <li class="menu-item"><a href="">Digital
                                            Advertisement Service
                                        </a></li>
                                    <li class="menu-item"><a href="">Social
                                            Media Advertisement Service
                                        </a></li>
                                    <li class="menu-item"><a href="">Email Marketing</a>
                                    </li>
                                    <li class="menu-item"><a href="">SMS Marketing</a></li>
                                    <li class="menu-item"><a href="">Poster Designing
                                        </a></li>
                                    <li class="menu-item"><a href="">Affiliated
                                            Marketing Service
                                        </a></li>
                                </ul>
                            </li> 

                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto"  href="">Blog</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="">Contact</a>
                    </li>



                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a class="getstarted scrollto" href="{{ route('login') }}">Get Started</a>
        </div>
    </header>
