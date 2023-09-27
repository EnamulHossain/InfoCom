@extends('front.layout.app')

@section('front')

<!-- rts banner area start -->
<div class="rts-banner-four bg_image--6 bg_image fixed-images">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-four-content">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        Follow the trends <br>
                        <span>& lead the changes</span>
                    </h1>
                    <div class="button-area" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                        <form action="contactus.html">
                            <button>
                                <img src="{{asset('assets/images/banner/shape/btn-bg.png')}}" alt="axela_banner">
                                <span>Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts banner area end -->


<!-- start Footer area -->
    <!-- our brand area start -->
    <div class="rts-brand-area rts-section-gapBottom">
        <h2 class="text-center" style="margin: 40px">Our Enterprise Partnerships</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-one-wrapper">
                        <!-- Swiper -->
                        <div class="swiper brand-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{ asset('assets/images/brand/01.png') }}"
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src=" {{ asset('assets/images/brand/02.png') }} "
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{ asset('assets/images/brand/03.png') }}"
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{ asset('assets/images/brand/04.png') }}"
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img class="mt-dec-brand"
                                            src="{{ asset('assets/images/brand/05.png') }}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/01.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/02.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/03.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/04.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img class="mt-dec-brand" src="{{asset('assets/images/brand/05.png')}}"
                                            alt="Brand_area_images"></a>
                                </div>
                            </div>
                        </div>
                        <!-- swiper end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our brand area End -->
    <!-- ENd Footer Area -->


    <!-- rts service area start -->
    <div class="rts-service-area rts-section-gap service-bg-color">
        <div class="container">
            <div class="row mb--10">
                <div class="title-area text-center">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Simple Easy Quick Steps</span>
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Service We Provide</h3>
                </div>
            </div>
            <div class="row g-24 mt--5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/09.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Online Marketing
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/10.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Business Solution
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/11.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Creative Layout
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/12.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Web Development
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

    <!-- start call to action area -->
    <div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Simple Easy Quick Steps</span>
                            <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Have any project in <br>your Mind?</h3>
                        </div>
                        <div class="cta-contact-box">
                            <div class="left-side">
                                <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Mail us anytime</p>
                                <a href="mailto:someone@example.com" class="email" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">info@example.com</a>
                            </div>
                            <div class="right-side">
                                <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Call us 24/7</p>
                                <a href="tel:+4733378901" class="phone" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">+252-2136.21458</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->






    <!-- rts service area start -->
    <div class="rts-service-area rts-section-gap service-bg-color">
        <div class="container">
            <div class="row mb--10">
                <div class="title-area text-center">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Simple Easy Quick Steps</span>
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Service We Provide</h3>
                </div>
            </div>
            <div class="row g-24 mt--5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/09.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Online Marketing
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/10.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Business Solution
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/11.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Creative Layout
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one home-three text-center">
                        <div class="icon">
                            <img src="assets/images/service/12.svg" alt="axela_service">
                        </div>
                        <a href="service-details.html">
                            <h5 class="title">
                                Web Development
                            </h5>
                        </a>
                        <p class="disc">
                            Orci torquent honcus vehula the eros netus primis metusa name vitae facilisis facilisi
                        </p>
                        <a href="service-details.html" class="rts-read-more two">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->






    <!-- tart Customer feedback area -->
    {{-- <div class="rts-testimonial-area-one pb--120">
        <div class="bg-light-testimonial">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-12">
                        <div class="title-area-testi">
                            <div class="title-area text-start">
                                <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Customer
                                    Testimonial</span>
                                <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    Customer’s Feedbacks</h3>
                            </div>
                            <div class="swiper-button-wrapper">
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="slide-div">
                            <!-- Swiper -->
                            <div class="swiper testimonial-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/02.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/03.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- swiper end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- tart Customer feedback area End -->


<!-- start Footer area -->
    <!-- our brand area start -->
    <div class="rts-brand-area rts-section-gapBottom">
        <h2 class="text-center" style="margin: 40px">Our Enterprise Client</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-one-wrapper">
                        <!-- Swiper -->
                        <div class="swiper brand-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{ asset('assets/images/brand/01.png') }}"
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src=" {{ asset('assets/images/brand/02.png') }} "
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{ asset('assets/images/brand/03.png') }}"
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{ asset('assets/images/brand/04.png') }}"
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img class="mt-dec-brand"
                                            src="{{ asset('assets/images/brand/05.png') }}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/01.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/02.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/03.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{asset('assets/images/brand/04.png')}}" alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img class="mt-dec-brand" src="{{asset('assets/images/brand/05.png')}}"
                                            alt="Brand_area_images"></a>
                                </div>
                            </div>
                        </div>
                        <!-- swiper end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our brand area End -->
    <!-- ENd Footer Area -->



    <!-- tart Customer feedback area -->
    <div class="rts-testimonial-area-one pb--120">
        <div class="bg-light-testimonial">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-12">
                        <div class="title-area-testi">
                            <div class="title-area text-start">
                                <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Customer
                                    Testimonial</span>
                                <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    Customer’s Feedbacks</h3>
                            </div>
                            <div class="swiper-button-wrapper">
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="slide-div">
                            <!-- Swiper -->
                            <div class="swiper testimonial-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/02.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/03.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="assets/images/testimonials/01.png" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>Jasmine Lemon</h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <p class="disc">
                                                    ”Quam conubia venenatis nullam nisi bibendum posuere ligula urna. Netus partent
                                                    morbi convallis cum habitasse mauris arcu taciti magna orci primis”
                                                </p>
                                            </div>
                                            <div class="footer">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="logo">
                                                    <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- swiper end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tart Customer feedback area End -->

@endsection