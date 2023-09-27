<!DOCTYPE html>
<html lang="en" data-theme="light" class="darkmode">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFOCOM</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/hover-revel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/toastr.min.css_2.1.4/cdnjs/toastr.min.css') }}"">
    <script type="text/javascript" src="#""></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ session('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

</head>

<body>

    <!-- header one -->
    <!-- header one -->
    <header class="header-one header--sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-4">
                    <!-- logo area start -->
                    <a href="index.html" class="thumbnail">
                        <img class="active-light" src="{{ asset('assets/images/logo/logo-1.png') }}" alt="axela-logo">
                        <img class="active-dark" src="{{ asset('assets/images/logo/logo-1.png') }}" alt="axela-logo">
                    </a>
                    <!-- logo area end -->
                </div>
                <div class="col-lg-7 d-none d-xl-block">
                    <div class="main-header">
                        <nav class="main-nav">
                            <ul class="mainmenu">
                                <li class="single">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                {{-- <li class="single">
                                    <a href="{{url('/front-packages')}}">Packages</a>
                                </li> --}}
                                <li class="single">
                                    <a href="{{ url('/front-business') }}">Business</a>
                                </li>
                                <li class="has-droupdown">
                                    <a href="#">About Us</a>
                                    <ul class="submenu">
                                        <li><a class="single" href="{{ url('/front-about') }}">About Us</a></li>
                                        <li><a class="single" href="{{ route('f.board') }}">Board of Directors</a></li>
                                        <li><a class="single" href="{{ route('f.management') }}">Our Management</a></li>
                                        <li><a class="single" href="{{ route('f.team') }}">Our Team</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a href="{{ url('/front-packages') }}">Service</a>
                                    <ul class="submenu">
                                        <li><a class="single" href="#connectivity">Connectivity</a></li>
                                        <li><a class="single" href="#Colocation">Colocation</a></li>
                                        <li><a class="single" href="#Security">Security & Surveillance</a></li>
                                        <li><a class="single" href="#Domain">Domain & Hosting</a></li>
                                        <li><a class="single" href="#SSL">SSL Certification</a></li>
                                        <li><a class="single" href="#LAN">LAN Solution</a></li>
                                    </ul>
                                </li>
                                <li class="single">
                                    <a href="{{ url('/front-pay-bill') }}">Pay Bill</a>
                                </li>
                                <li class="single">
                                    <a href="{{ url('/front-blog') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('/front-contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-10 col-md-9 col-8">
                    <div class="header-right">
                        {{-- <a href="#" class="rts-btn btn-secondary call-btn">Let’s Talk
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z"
                                    fill="#3B38EB" />
                            </svg>
                        </a> --}}
                        {{-- <a id="menu-btn" href="#" class="rts-btn btn-secondary menu-btn"
                            onclick="event.preventDefault();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                                fill="none">
                                <rect y="12" width="18" height="2" fill="#3B38EB" />
                                <rect x="5" y="6" width="8" height="2" fill="#3B38EB" />
                                <rect width="18" height="2" fill="#3B38EB" />
                            </svg>
                        </a> --}}
                        {{-- <a href="#" class="rts-btn btn-secondary call-btn">Login</a>
                        <a href="#" class="rts-btn btn-secondary call-btn">Registration</a> --}}
                        @guest
                            <a href="{{ route('login') }}" class="rts-btn btn-secondary call-btn">Login</a>
                            <a href="{{ route('register') }}" class="rts-btn btn-secondary call-btn">Registration</a>
                        @else
                        <span class="rts-btn btn-secondary call-btn">{{ auth()->user()->name }}</span>
                        <a href="{{ route('user.logout') }}" class="rts-btn btn-secondary call-btn">logout</a>

                        @endguest


                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- header one End -->
    <!-- header one End -->
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="{{ asset('assets/images/logo/logo-1.png') }}"
                    alt="axela_logo"></a>
            <a class="logo-2" href="index.html"><img class="normal logo"
                    src="{{ asset('assets/images/logo/logo-1.png') }}" alt="axela-logo"></a>
            <div class="body d-none d-xl-block">

                <p class="disc">
                    We must explain to you how all seds this mistakens idea and pleasures and account.
                </p>
                <div class="social-wrapper-two">
                    <ul class="social-area">
                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a
                                href="https://www.facebook.com/akkhantelecomlimited/"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a
                                href="https://twitter.com/akkhantelecom"><i class="fab fa-twitter"></i></a></li>
                        <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a
                                href="https://www.linkedin.com/company/a-k-khan-telecom-limited/"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a
                                href="https://plus.google.com/u/0/103471890895160010246"><i
                                    class="fab fa-skype"></i></a></li>
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
                            <a href="#">+8801819411161</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">marketing@aktelecom.net
                            </a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.infocomltd.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">Uday Tower (9th floor)
                                Plot # 57 & 57/A,)
                                Gulshan Avenue,
                                Dhaka – 1212</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav mt--30">
                    <ul class="mainmenu" id="mobile-menu-active">
                        <li class="single">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        {{-- <li class="single">
                            <a href="{{url('/front-packages')}}">Packages</a>
                        </li> --}}
                        {{-- <li class="single">
                            <a href="{{url('/front-business')}}">Business</a>
                        </li> --}}
                        <li class="has-droupdown">
                            <a href="#">About Us</a>
                            <ul class="submenu">
                                <li><a class="single" href="{{ url('/front-about') }}">About Us</a></li>
                                <li><a class="single" href="{{ route('f.board') }}">Board of Directors</a></li>
                                <li><a class="single" href="{{ route('f.management') }}">Management</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="{{ url('/front-packages') }}">Service</a>
                            <ul class="submenu">
                                <li><a class="single" href="#connectivity">Connectivity</a></li>
                                <li><a class="single" href="#Colocation">Colocation</a></li>
                                <li><a class="single" href="#Security">Security & Surveillance</a></li>
                                <li><a class="single" href="#Domain">Domain & Hosting</a></li>
                                <li><a class="single" href="#SSL">SSL Certification</a></li>
                                <li><a class="single" href="#LAN">LAN Solution</a></li>
                            </ul>
                        </li>
                        <li class="single">
                            <a href="{{ url('/front-pay-bill') }}">Pay Bill</a>
                        </li>
                        <li class="single">
                            <a href="{{ url('/front-blog') }}">Blog</a>
                        </li>

                        <li>
                            <a href="{{ url('/front-contact') }}">Contact US</a>
                        </li>
                    </ul>
                </nav>
                <div class="social-wrapper-two mt--50">
                    <ul class="social-area">
                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a
                                href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a
                                href="#"><i class="fab fa-twitter"></i></a></li>
                        <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a
                                href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a
                                href="#"><i class="fab fa-skype"></i></a></li>
                    </ul>
                </div>
                <!-- <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a> -->
            </div>
        </div>
    </div>
