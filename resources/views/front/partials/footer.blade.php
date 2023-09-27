 <!-- start Footer area -->
 <!-- footer area start -->
 <div class="rts-footer-area-one rts-section-gap footer-one-bg" style="color: white">
     <div class="container">
         <div class="row">
             <div class="bg-footer-one-shape">
                 <div class="wrapper">
                     <img class="footer_shape small" src="{{ asset('assets/images/footer/01.png') }}" alt="Footer_bg"
                         data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                     <img class="footer_shape large" src="{{ asset('assets/images/footer/02.png') }}" alt="Footer_bg"
                         data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="footer-one-left">
                     <a class="logo" href="#">
                         <img src="{{ asset('assets/images/logo/logo-1.png') }}" alt="Logo_image" data-sal-delay="150"
                             data-sal="slide-up" data-sal-duration="800">
                     </a>
                     <h4 style="color:white">Our Social Networks</h4>
                     <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" style="color: white">
                         Thank you for visiting our website, for our most up to date information and photos please visit
                         our social networks.
                     </p>
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
             </div>
             <div class="col-lg-8">
                 <div class="footer-right-one">
                     <div class="single-wized-footer">
                         <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                             Infocom Limited
                         </h5>

                         <ul class="list">
                             <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="service-details.html">Uday Tower (9th floor)</a></li>
                             <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="service-details.html">Plot # 57 & 57/A,)</a></li>
                             <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="service-details.html">Gulshan Avenue,</a></li>
                             <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="service-details.html">Dhaka – 1212</a></li>
                             <li data-sal-delay="550" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="service-details.html">Email: marketing@aktelecom.net</a></li>
                             <li data-sal-delay="550" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="service-details.html">Phone: +8801819411161</a></li>
                         </ul>
                     </div>
                     <div class="single-wized-footer">
                         <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                             Resourses
                         </h5>
                         <ul class="list">
                             <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="{{ route('f.blog') }}">Blog</a></li>
                             <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="{{ route('f.packages') }}">Service</a></li>
                             <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="{{ route('f.management') }}">Team pages</a></li>
                         </ul>
                     </div>
                     <div class="single-wized-footer">
                         <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                             Importents Link
                         </h5>
                         <ul class="list">
                             <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="{{ route('f.contact') }}">Contact</a></li>
                             <li class="single">
                                 <a style="color: white" href="{{ url('/front-support') }}">Support</a>
                             </li>
                             <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="{{ route('f.about-us') }}">Privacy Policy</a></li>
                             <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a
                                style="color: white" href="{{ route('f.about-us') }}">Terms of Use</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- footer area end -->

 <!-- rts-copyright-area -->
 <div class="rts-copyright-area ptb--30 ptb_sm--15">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="copyu-right-wrapper">
                     <div class="left single">
                         <a href="#">Home</a>
                         <a href="{{ route('f.contact') }}" class="ml--20">Contact Us</a>
                     </div>
                     <div class="left single">
                         <p>© Copyright A.K. Khan Telecom. All Rights Reserved</p>
                     </div>
                     <div class="left single">
                         <a href="{{ route('f.about-us') }}">About Us</a>
                         <a href="{{ route('f.blog') }}" class="ml--20">Blog</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- rts-copyright-area ENd -->
 <!-- ENd Footer Area -->

 <div class="modal-sidebar-scroll rts-dark-light">
     <ul>
         <li><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
         <li><span>Light</span><i class="rts-go-light far fa-sun"></i></li>
     </ul>
 </div>


 {{-- <div class="loader-wrapper">
     <div class="loader">
     </div>
     <div class="loader-section section-left"></div>
     <div class="loader-section section-right"></div>
 </div> --}}


 <div class="progress-wrap">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
             style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
         </path>
     </svg>
 </div>



 <!-- scripts start form hear -->
 <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/sal.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/fancybox.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/marquery.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>


 <script src="{{ asset('assets/js/plugins/hover-revel.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/twinmax.js') }}"></script>


 <script src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>


 <!-- main Js -->
 <script src="{{ asset('assets/js/main.js') }}"></script>
 <!-- scripts end form hear -->
 </body>

 </html>
