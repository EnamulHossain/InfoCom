@extends('front.layout.app')

@section('front')
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/logo-1.png" alt="axela_logo"></a>
        <a class="logo-2" href="index.html"><img class="normal logo" src="assets/images/logo/logo-1.png" alt="axela-logo"></a>
        <div class="body d-none d-xl-block">

            <p class="disc">
                We must explain to you how all seds this mistakens idea and pleasures and account.
            </p>
            <div class="social-wrapper-two">
                <ul class="social-area">
                    <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-skype"></i></a></li>
                </ul>
            </div>
            <div class="get-in-touch mt--50">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">+8801234566789</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">example@gmail.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.webexample.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">13/A, New Pro State, NYC</a>
                    </div>
                    <!-- single ENd -->
                </div>
            </div>
        </div>
        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#">Home</a>
                        <ul class="submenu">
                            <a href="#" class="tag">Multipages</a>
                            <li><a class="mobile-menu-link" href="index.html">Creative Agency</a></li>
                            <li><a class="mobile-menu-link" href="index-two.html">Corporate Agency</a></li>
                            <li><a class="mobile-menu-link" href="index-three.html">StartUp Agency</a></li>
                            <li><a class="mobile-menu-link" href="index-four.html">Digital Agency</a></li>
                            <li><a class="mobile-menu-link" href="index-five.html">Portfolio Agency</a></li>
                            <li><a class="mobile-menu-link" href="index-six.html">Full Screen Slider</a></li>
                            <li><a class="mobile-menu-link" href="index-seven.html">Portfolio Showcase</a></li>
                        </ul>
                        <ul class="submenu">
                            <a href="#" class="tag">Onepages</a>
                            <li><a class="mobile-menu-link" href="one-page-one.html">Creative OnePage</a></li>
                            <li><a class="mobile-menu-link" href="one-page-two.html">Corporate OnePage</a></li>
                            <li><a class="mobile-menu-link" href="one-page-three.html">StartUp OnePage</a></li>
                            <li><a class="mobile-menu-link" href="one-page-four.html">Digital OnePage</a></li>
                            <li><a class="mobile-menu-link" href="one-page-five.html">Portfolio OnePage</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="has-droupdown">
                        <a href="#">Services</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="service.html">Our Services</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#">Pages</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="service.html">Services</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                            <li><a class="mobile-menu-link" href="team.html">Team</a></li>
                            <li><a class="mobile-menu-link" href="team-details.html">Team Details</a></li>
                            <li><a class="mobile-menu-link" href="faq.html">FAQ Page</a></li>
                            <li><a class="mobile-menu-link" href="price-plan.html">Price Plan</a></li>
                            <li><a class="mobile-menu-link" href="404.html">404 Page</a></li>
                            <li><a class="mobile-menu-link" href="portfolio.html">Portfolio Style 1</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-style-2.html">Portfolio Style 2</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-style-3.html">Portfolio Style 3</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-style-4.html">Portfolio Style 4</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-style-5.html">Portfolio Style 5</a></li>
                            <li><a class="mobile-menu-link" href="project-details.html">Portfolio Details</a></li>
                            <li><a class="mobile-menu-link" href="team.html">Team Style 1</a></li>
                            <li><a class="mobile-menu-link" href="team-style-2.html">Team Style 2</a></li>
                            <li><a class="mobile-menu-link" href="team-style-3.html">Team Style 3</a></li>
                            <li><a class="mobile-menu-link" href="team-style-4.html">Team Style 4</a></li>
                            <li><a class="mobile-menu-link" href="team-style-5.html">Team Style 5</a></li>
                            <li><a class="mobile-menu-link" href="team-details.html">Team Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#">Blog</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contactus.html">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <div class="social-wrapper-two mt--50">
                <ul class="social-area">
                    <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-skype"></i></a></li>
                </ul>
            </div>
            <!-- <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a> -->
        </div>
    </div>
    <!-- inner menu area desktop End -->
</div>

<div id="anywhere-home"></div>

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Latest Posts</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.html" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="#" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Latest Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- rts blog grid area -->
<div class="rts-blog-grid-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/01.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Building smart business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/02.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Smart business grow solution for your Building.
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/03.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        More smart business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/04.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Best smart business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/05.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Solution your business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/06.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Smart business grow solution for your Company
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/07.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Latest business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/08.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Thinking smart business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/09.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Smart business grow solution for your building.
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/10.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Grow smart business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/01.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        business grow solution for you Building smart
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <!-- start blog grid inner -->
                        <div class="blog-grid-inner">
                            <div class="blog-header">
                                <a class="thumbnail" href="blog-details.html">
                                    <img src="assets/images/blog/grid/02.jpg" alt="Business_Blog">
                                </a>
                                <div class="blog-info">
                                    <div class="user">
                                        <i class="fal fa-user-circle"></i>
                                        <span>by Smith</span>
                                    </div>
                                    <div class="user">
                                        <i class="fal fa-tags"></i>
                                        <span>Business</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <h6 class="title">15</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="blog-body">
                                <a href="blog-details.html">
                                    <h5 class="title">
                                        Building smart business grow solution for you
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <!-- end blog grid inner -->
                    </div>
                </div>
                <!-- pagination area -->
                <div class="row mt--30">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="pagination">
                                <button class="active">01</button>
                                <button>02</button>
                                <button>03</button>
                                <button>04</button>
                                <button><i class="fal fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagination area End -->
            </div>
            <!--rts blog wized area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                <!-- single wized start -->
                <div class="rts-single-wized search" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Search Hear
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="rts-search-wrapper">
                            <input class="Search" type="text" placeholder="Enter Keyword">
                            <button><i class="fal fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized Categories" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Categories
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Solution Model<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Business Advantage<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Feature Product<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Catagory Thury<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized Recent-post" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/02.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/03.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/04.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized Recent-post" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="gallery-inner">
                            <div class="row-1 single-row">
                                <a href="#"><img src="assets/images/blog/details/gallery/01.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/02.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/03.png" alt="Gallery"></a>
                            </div>
                            <div class="row-2 single-row">
                                <a href="#"><img src="assets/images/blog/details/gallery/04.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/05.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/06.png" alt="Gallery"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Popular Tags
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="tags-wrapper">
                            <a href="#">Services</a>
                            <a href="#">Business</a>
                            <a href="#">Growth</a>
                            <a href="#">Finance</a>
                            <a href="#">UI/UX Design</a>
                            <a href="#">Solution</a>
                            <a href="#">Speed</a>
                            <a href="#">Strategy</a>
                            <a href="#">Technology</a>
                        </div>
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized contact" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <a href="index.html"><img src="assets/images/logo/logo-1.png" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here
                            To Help You</h5>
                        <a class="rts-btn btn-primary" href="contactus.html">Contact Us</a>
                    </div>
                </div>
                <!-- single wized End -->
            </div>
            <!-- rts- blog wized end area -->
        </div>
    </div>
</div>
<!-- rts blog grid area end -->

@endsection