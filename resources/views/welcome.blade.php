
@extends('layouts.frontend.master') @section('') @section('body')
<!-- ======= Hero Section ======= -->
<div class="page-wrapper" id="main-wrapper">
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 class="underline">Get Top Digital Marketing Solutions As Per <span>
                            Business Requirements.
                        </span></h1>
                    <ul>
                        <li>
                            24/7 Support Services.
                        </li>
                        <li>
                            Best Expert Professional Team To Assist.
                        </li>
                        <li>
                            Wide Range of Online Marketing Services.
                        </li>
                    </ul>
                    <div class="mt-3 banner-btn">
                        <a href="" class="getstarted scrollto">Get Started</a>
                        <!-- <a href="" class="getquote"><i class="ri-information-line"></i>Request a Quote</a> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('frontend/img/banner/digital marketing-main.png') }}" class="img-fluid"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
</div>
<!-- End #main --> @endsection
