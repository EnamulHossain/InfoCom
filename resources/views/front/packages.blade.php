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
                            <p style="font-size: 20px; color:white">Dedicated Internet Bandwidth is AKTL’s network flagship
                                product. Dedicated link is
                                established using our own fiber optic, Underground Fiber Optic via NTTN and RADIO. Our
                                network ensures excellent quality, high capacity and low latency internet connectivity.</p>
                        </h1>
                        <div class="button-area" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                            <form action="contactus.html">
                                <button>
                                    <img src="assets/images/banner/shape/btn-bg.png" alt="axela_banner">
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

    <!-- rts faq area start -->
    {{-- connectivity --}}
    <div class="rts-faq-area-one rts-section-gap connectivity" id="connectivity">
        <div class="container">
            <div class="row g-6 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src="{{asset('assets/images/faq/internet.png')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Internet Connectivity
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dedicated Internet Bandwidth is AKTL’s network flagship product. Dedicated link is
                                        established using our own fiber optic, Underground Fiber Optic via NTTN and RADIO.
                                        Our network ensures excellent quality, high capacity and low latency internet
                                        connectivity. Our networks maintains redundancy of all hardware used in the network
                                        along with it’s SEA-MEE-WE-4 and ITC cable to ensure fast access to the World Wide
                                        Web. Using International BW, GGC BW and BDIX BW.

                                        Having a reliable, responsive service provider for your internet connectivity is a
                                        key communication with your valued customers and rest of the world. If you are
                                        looking for a professional service provider who can walk the talk, call us up. By
                                        using internet connection from a renowned ISP company, you may get the following
                                        facilities at your fingertips.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion area faq end -->
                </div>
            </div>
            <div class="row g-6 align-items-center">

                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Data Connectivity
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Infocom Limited provides data connectivity via underground fiber optics and GSM 3G
                                        (ROBI/Banglalink) based data communication services for the corporate customer’s all
                                        over Bangladesh. Keeping in mind that the low cost but a robust communication link
                                        is a main concern. Infocom Limited gives access to virtually unlimited and
                                        manageable bandwidth and network coverage. We provide uninterrupted network
                                        availability 24/7.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src="{{asset('assets/images/faq/intranet.png')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area end -->











    <!-- rts faq area start -->
    {{-- connectivity --}}
    <div class="rts-faq-area-one rts-section-gap" id="Colocation">
        <div class="container">
            <div class="row g-6 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src="{{asset('assets/images/faq/colocation.jpg')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Colocation Service
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Enjoy the peace of mind that comes with knowing your servers are protected with the
                                        latest technology and onsite personnel. Infocom’s data Centre service use the latest
                                        technology to ensure your equipment is protected. With Central UPS’s, dedicated
                                        backup generators and high speed network we are confident enough to offer a 100%
                                        Network Uptime Guarantee.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion area faq end -->
                </div>
            </div>
            <br>
            <br>
            <div class="row g-6 align-items-center" id="Security">

                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Security & Surveillance
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Intruders and thieves are perpetual threats to most businesses, so maintaining
                                        security should be a top priority in your organisation. Physical security protocols
                                        might include requiring employees to wear badges and lock doors and set alarms as
                                        they enter and exit facilities. Computer security protocols might require employees
                                        to change passwords periodically and avoid opening personal email accounts at work.
                                        <br>
                                        Situator, the leading Situation Management solution, integrates and correlates
                                        information in real time from multiple and diverse systems across the enterprise. At
                                        the same time, it coordinates the most effective responses, ensuring that everyone
                                        in the operational chain knows what is happening, where it’s happening and how to
                                        respond. Situator provides the tools necessary to address every aspect of the
                                        control room management lifecycle
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src="{{asset('assets/images/faq/security.png')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area end -->

    <!-- rts faq area start -->
    {{-- connectivity --}}
    <div class="rts-faq-area-one rts-section-gap" id="Domain">
        <div class="container">
            <div class="row g-6 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src=" {{asset('assets/images/faq/domain.png')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Domain & Hosting Services
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A web hosting service is a type of Internet hosting service that allows individuals
                                        and organizations to make their website accessible via the World Wide Web (www).
                                        This service is offered by a website hosting company, who basically allots some
                                        space and bandwidth to a user. There are several different types of website hosting
                                        that could be beneficial for you but it is important that you know what sort of
                                        website you want to create before you start making any major decisions. Low cost web
                                        hosting service is another aspect of web hosting which is cost effective and
                                        affordable to everyone. The following factors indicates why Infocom Limited is the
                                        best fit for domain and hosting.
                                        <br>
                                        The cost of hiring webmasters is eliminated.
                                        If a site has images, videos, audio files, content or animation, the only way to
                                        ensure that customers can easily access the same is through use of website hosting
                                        services.
                                        Website hosting also allows you to create the databases which is simply
                                        indispensable for the online business owners.
                                        Through website hosting, you get a service that gives you email accounts. This
                                        increases the credibility of your company.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion area faq end -->
                </div>
            </div>
            <div class="row g-6 align-items-center">

                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Domain Registration

                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The prominent domains are .com, .net, and org, and the country code top-level
                                        domains (ccTLDs). For Bangladesh the country code top-level domain (ccTLDs) is .bd.
                                        INFOCOM provide domain registration service for all the prominent domains and also
                                        registrar the .BD domain from BTCL on behalf of customer.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Hosting Service
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Web hosts are companies that provide space on a server owned or leased for use by
                                        clients. As an ISP, AKTL also offer this service to subscribers. AKTL provide an
                                        interface or control panel for managing the Web server and installing scripts, as
                                        well as other modules and service applications like e-mail solution.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src="{{asset('assets/images/faq/dedicated-hosting.png')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area end -->




    <!-- rts faq area start -->
    <div class="rts-faq-area-one rts-section-gap" id="SSL">
        <div class="container">
            <div class="row g-6 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src="{{asset('assets/images/faq/sslcer.png')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        SSL Certification
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Infocom provides SSL certificates services which provides encryption and
                                        authentication for one or multiple domains. Expand trust and exchanges and
                                        demonstrate your clients that your site is secure.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion area faq end -->
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row g-6 align-items-center"  id="LAN">

                <div class="col-lg-6">
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        LAN Solution & Maintenance
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Infocom has several skilled teams who can provide Wired and Wireless Local Area
                                        Network (LAN) services. Different corporate organization required different types of
                                        LAN setup solution. Infocom’s skilled professionals do the necessary survey and
                                        select the best possible product according to the service requirement. Infocom has a
                                        team of professional for LAN maintenance. This service agreement can be a weekly,
                                        monthly & yearly basis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-faq-h2 pr--20">
                        <img src="{{asset('assets/images/faq/lansol.png')}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area end -->

    {{-- <!-- our working process area start -->
    <div class="rts-working-process-area rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">How We Work</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Our Work
                            Process
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/01.svg" alt="process-logo">
                            <h5 class="title">
                                #1 Design
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/02.svg" alt="process-logo">
                            <h5 class="title">
                                #2 Branding
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/03.svg" alt="process-logo">
                            <h5 class="title">
                                #3 Marketing
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/04.svg" alt="process-logo">
                            <h5 class="title">
                                #4 Solution
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our working process area end -->

    <!-- service-appoinment-area start -->
    <div class="rts-service-area bg-light rts-section-gap service-bg_shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Services</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Service We
                            Provide</h3>
                    </div>
                </div>
            </div>
            <div class="row g-24 mt--5">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/01.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Product Design
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante er pharetra hire to Give.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/02.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Digital Marketing
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante er pharetra hire to Give.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/03.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Web Development
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante er pharetra hire to Give.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/04.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Technology Solution
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante er pharetra hire to Give.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/05.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Business Solution
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante er pharetra hire to Give.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/06.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Creative Layout
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante er pharetra hire to Give.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/07.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Content strategy
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante er pharetra hire to Give.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up"
                    data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/08.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Product Design
                            </h5>
                        </a>
                        <p class="disc">
                            Nisul cong rhon risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="service-details.html" class="rts-read-more">Learn More<i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- service-appoinment-area End -->





    <!-- service-appoinment-area start -->
    <div class="rts-service-area bg-light rts-section-gap service-bg_shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Services</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"> Ongoing Hot
                            Offer</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- service-appoinment-area End -->



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
                    <form id="contact-form" action="mailer.php" method="post">
                        <div class="name-email">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Email Address" required>
                            <input type="text" name="phone" placeholder="Phone Number">
                        </div>
                        <textarea placeholder="Address" name="address"></textarea>
                        <div class="name-email">
                            <label for="dropdown1">Your District Name</label>
                            <select id="dropdown1" name="option1">
                                <option value="option1_value1"> -- </option>
                            </select>

                            <label for="dropdown2">Your Upazilla Name</label>
                            <select id="dropdown2" name="option2">
                                <option value="option2_value1"> -- </option>
                            </select>
                        </div>
                        <button type="submit" class="rts-btn btn-primary">Address</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- conact us form fluid end --> --}}
@endsection
