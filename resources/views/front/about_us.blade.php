@extends('front.layout.app')

@section('front')
    <!-- rts banner area start -->
    <div class="rts-banner-four bg_image--6 bg_image fixed-images">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-four-content">
                        <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            INFOCOM<br>
                            <span>Powered by AKTL</span>
                        </h1>
                        <div class="button-area" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                            <form action="contactus.html">
                                <button>
                                    <img src="{{ asset('assets/images/banner/shape/btn-bg.png') }}" alt="axela_banner">
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


    <!-- rts blog post area start -->
    <div class="rts-blog-post-h5 rts-section-gap-2 blog-bg-h5">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area ho-5" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title">
                            INFOCOM Limited
                        </h2>
                        <p>
                            Infocom Limited is a concern of A K Khan Telecom Limited. All these are under the umbrella of A
                            K Khan Group. A. K. Khan and Company Limited is one of the oldest and most renowned private
                            sector organizations in Bangladesh established in 1945.

                            <br>
                            <br>

                            Infocom Limited has started it’s ISP operation in Chattogram. Later extended it’s service to
                            Dhaka. And now it’s operated from Dhaka.

                            <br>
                            <br>

                            Infocom is a trusted name in Bangladesh for Internet and Data Communication Service, Our network
                            ensures excellent quality, high capacity and low latency Internet connectivity. We have
                            established our own dedicated link through an underground fiber optic via NTTN and Radio. Our
                            network maintains redundancy of all hardware used. SEA-MEE-WE-4 and ITC cables ensure fast
                            access speeds to the World Wide Web.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-24">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- single blog area -->
                    <div class="rts-blog-area-h5-single" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/blog/07.jpg" alt="blog_image">
                        </a>
                        <div class="inner-area">
                            <a href="#">
                                <h1 class="title">
                                    Our Vision
                                </h1>
                            </a>

                            <p class="disc">
                                In the next 5 years, INFOCOM aspires to become the preferred choice in digital lifestyle
                                using
                                world-class technology and innovation.
                            </p>
                        </div>
                    </div>
                    <!-- single blog area End -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- single blog area -->
                    <div class="rts-blog-area-h5-single" data-sal-delay="250" data-sal="zoom-in" data-sal-duration="800">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/blog/08.jpg" alt="blog_image">
                        </a>
                        <div class="inner-area">
                            <a href="#">
                                <h1 class="title">
                                    Our Mission
                                </h1>
                            </a>

                            <p class="disc">
                                INFOCOM exists to seamlessly connect people and organizations, enrich their lives and open
                                them to a world of possibilities
                            </p>
                        </div>
                    </div>
                    <!-- single blog area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog post area end -->




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
                                    <a href="#"><img src="{{ asset('assets/images/brand/01.png') }}"
                                            alt="Brand_area_images"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#"><img src="{{ asset('assets/images/brand/02.png') }}"
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
@endsection
