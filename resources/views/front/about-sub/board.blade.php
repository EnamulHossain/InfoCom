@extends('front.layout.app')
@section('front')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Board of Directors</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- team area start-->
    <div class="rts-team-area rts-section-gap bg-team-color">
        <div class="container">
            <div class="row g-5">
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="team-details.html">
                                <img src="{{asset('assets/images/team/tm/chairman.jpg')}}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="team-details.html">
                                <h5 class="title">ABUL KASEM SHAMSUDDIN KHAN</h5>
                            </a>
                            <p>Chairman</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="team-details.html">
                                <img src="{{asset('assets/images/team/tm/md.jpg')}}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="team-details.html">
                                <h5 class="title">ABUL KASEM KHAN</h5>
                            </a>
                            <p>Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area End -->
@endsection