@extends('front.layout.app')
@section('front')
<div class="banner-horizontal">
    <div class="swiper swiper-container-h">
        <div class="swiper-wrapper">
            @foreach ($slider as $slide)
                <div class="swiper-slide">
                    <div class="slider-inner" data-swiper-parallax="100">
                        <img src="{{ asset($slide->image) }}" alt="full_screen-image">
                        <div class="swiper-content" data-swiper-parallax="2000">
                            <div class="title-area">
                                <!-- title-area -->
                                <a href="#" class="title">
                                    Smart <br>
                                    Developer
                                </a>
                                <!-- title area -->
                            </div>
                            <p class="disc">
                                2023 <br> BRAND IDENTITY
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-wrapper">
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
            </div>
        </div>
    </div>
</div>

    <!-- rts banner area end -->

    {{-- <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
            <li><span>Light</span><i class="rts-go-light far fa-sun"></i></li>
        </ul>
    </div>


    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div> --}}

    <!-- our working process area start -->
    <div class="rts-working-process-area rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">What are You
                            Looking For ?</h3>
                    </div>
                </div>
            </div>

            <div class="tab-button-area-one">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Packages</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Reconnection</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content-area mt--50 mt_sm--30">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- tab product area -->
                        <div class="row g-5">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-working-process-one">
                                    <div class="inner text-center" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <img class="logo" src="{{ asset('assets/images/working-process/logo/01.svg') }}"
                                            alt="process-logo">
                                        <h5 class="title">
                                            Price Range
                                        </h5>
                                        <p class="disc">

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-working-process-one">
                                    <div class="inner text-center" data-sal-delay="250" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <img class="logo" src="{{ asset('assets/images/working-process/logo/02.svg') }}"
                                            alt="process-logo">
                                        <h5 class="title">
                                            Network Bandwith
                                        </h5>
                                        <p class="disc">

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-working-process-one">
                                    <div class="inner text-center" data-sal-delay="350" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <img class="logo" src="{{ asset('assets/images/working-process/logo/03.svg') }}"
                                            alt="process-logo">
                                        <h5 class="title">
                                            Special Needs
                                        </h5>
                                        <p class="disc">

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-working-process-one">
                                    <div class="inner text-center" data-sal-delay="450" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <img class="logo" src="{{ asset('assets/images/working-process/logo/04.svg') }}"
                                            alt="process-logo">
                                        <h5 class="title">
                                            Area Coverage
                                        </h5>
                                        <p class="disc">

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product area end-->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- tab product area -->


                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('reconnections.store') }}" method="POST">
                                    @csrf
                                    <div class="appoinment-area-one mt--120 mt_sm--60">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- appoinment-right -->
                                                <div class="appoinment-right">
                                                    <div class="single-input">
                                                        <label for="name">Your Name*</label>
                                                        <input type="text" id="name" name="name" required>
                                                    </div>
                                                    <div class="single-input mt--20">
                                                        <label for="Email">Your Email*</label>
                                                        <input type="text" id="Email" name="email" required>
                                                    </div>
                                                    <div class="single-input mt--20">
                                                        <label for="message">Previous Address</label>
                                                        <textarea id="message" required name="previous_address"></textarea>
                                                    </div>
                                                </div>
                                                <!-- appoinment-right End -->
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- appoinment-right -->
                                                <div class="appoinment-right">
                                                    <div class="single-input">
                                                        <label for="reason">Select reason of reconnection</label>
                                                        <input type="text" id="reason" name="reason" required>
                                                    </div>
                                                    <div class="single-input mt--20">
                                                        <label for="customer_id">Current Infocom ID</label>
                                                        <input type="text" id="customer_id" name="customer_id"
                                                            required>
                                                    </div>
                                                    <div class="single-input mt--20">
                                                        <label for="current_address">Current Address</label>
                                                        <textarea id="current_address" required name="current_address"></textarea>
                                                    </div>
                                                </div>
                                                <!-- appoinment-right End -->
                                            </div>
                                        </div>
                                        <button type="submit" class="rts-btn btn-primary mt--30">Submit Now</button>
                                    </div>
                                </form>
                                <div class="appoinment-shape">
                                    <img class="shape-1 shape" src="assets/images/appoinment/shape/01.png"
                                        alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right"
                                        data-sal-duration="600">
                                    <img class="shape shape-2" src="assets/images/appoinment/shape/02.png"
                                        alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right"
                                        data-sal-duration="800">
                                </div>
                            </div>
                        </div>


                        <!-- tab product area end-->
                    </div>
                </div>
            </div>


        </div>
        {{-- <div class="" style="margin: 50px;">
            <a style="margin-left: 850px" href="#" class="rts-btn btn-primary">View result</a>
        </div> --}}
    </div>
    <!-- our working process area end -->




    <div class="rts-contact-form-area bg-gray-550">
        <div class="container">

            <div class="rts-contact-fluid rts-section-gap">
                <div class="row mb--30">
                    <div class="col-12">
                        <div class="title-area text-center">
                            <h3 class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up"
                                data-sal-duration="800">Check Coverage</h3>
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"
                                class="sal-animate">Please enter your district and thana to check coverage.</span>
                        </div>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div id="form-messages"></div>
                    <form id="contact-form" action="mailer.php" method="post">
                        <div class="name-email">
                            <input type="text" name="name" placeholder="District Name" required>
                            <input type="email" name="email" placeholder="Thana Name" required>
                        </div>
                        <button type="submit" class="rts-btn btn-primary"> Search</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- rts pricing area start -->
    <div class="pricing-area-h2 rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Price Table</span>
                        <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Our Price
                            Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row g-24">
                @foreach ($packages as $package)
                    <div class="col-lg-4">
                        <!-- single pricing start -->
                        <div class="single-pricing-area-h2" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="pricing-head">
                                <h5 class="title">
                                    {{ $package->package_name }}
                                </h5>
                            </div>
                            <div class="pricing-body">
                                <h3 class="title">
                                    ৳{{ $package->offer_price }} <span>/month</span>
                                </h3>
                                <div class="feature-area">
                                    <div class="single-feature">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Bandwith {{ $package->bandwith }}Mbps</span>
                                    </div>
                                    <div class="single-feature">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Youtube Unlimited</span>
                                    </div>
                                    <div class="single-feature">
                                        <i class="fas fa-check-circle"></i>
                                        <span>FTP 100Mbps</span>
                                    </div>
                                    <div class="single-feature">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Support 24/7</span>
                                    </div>
                                </div>
                                <a class="rts-btn btn-secondary" href="#">Get Started</a>
                            </div>
                        </div>

                        <!-- single pricing end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->



    <!-- cta section start -->
    <div class="rts-cta-section-start rts-section-gap cta-bg-h4">
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Let’s work
                        together</span>
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Need a
                        successful projects?</h3>
                    <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <a href="#" class="rts-btn btn-primary">Estimate Projects <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta section end -->

    <!-- conact us form fluid start -->
    <div class="rts-contact-form-area">
        <div class="container">

            <div class="rts-contact-fluid rts-section-gap">
                <div class="row mb--30">
                    <div class="col-12">
                        <div class="title-area text-center">
                            <h3 class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up"
                                data-sal-duration="800">Need New Connection?</h3>
                        </div>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div id="form-messages"></div>
                    <form action="{{ route('new-connections.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name*</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone"
                                placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address*</label>
                            <textarea name="current_address" class="form-control" id="address" placeholder="Address" required></textarea>
                        </div>
                        {{-- @auth
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        @endauth --}}
                        <div class="form-footer">
                            <button style="font-size: 20px" type="submit"
                                class="btn btn-primary btn-default">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- conact us form fluid end -->
@endsection
