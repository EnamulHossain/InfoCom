@extends('front.layout.app')
@section('front')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Team</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <div class="rts-team-area rts-section-gap bg-team-color">
        <div class="container">
            <div class="row g-5">
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="team-details.html">
                                <img src="assets/images/team/tm/tarun.jpg" alt="Business_Team_single">
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
                                <h5 class="title">Tarun Das</h5>
                            </a>
                            <p>Chief Technology Officer </p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="team-details.html">
                                <img src="assets/images/team/tm/farial.jpg" alt="Business_Team_single">
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
                                <h5 class="title">Farial Ahmed</h5>
                            </a>
                            <p>Dy Lead, Sales</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="team-details.html">
                                <img src="assets/images/team/tm/rashedul.jpg" alt="Business_Team_single">
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
                                <h5 class="title">Rashedul Islam</h5>
                            </a>
                            <p> Manager, Human Resources & Admin</p>
                        </div>
                    </div>
                </div>
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="team-details.html">
                                <img src="{{ asset('assets/images/team/tm/07.jpg') }}" alt="Business_Team_single">
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
                                <h5 class="title">Md. Shariar Hafiz
                                </h5>
                            </a>
                            <p>Manager, Sales</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="team-details.html">
                                <img src="{{ asset('assets/images/team/tm/systemadmin.png') }}"
                                    alt="Business_Team_single">
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
                                <h5 class="title">Mr. Sushanta Paul
                                </h5>
                            </a>
                            <p>Manager, System Administrator</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->

            </div>
        </div>
    </div>
@endsection
