@extends('front.layout.app')

@section('front')
    <!-- about us area start -->
    <div class="rts-about-us-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <img src="{{asset('assets/images/about-us/pay-online.png')}}" alt="creative_about">
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- appoinment-right -->
                    <div class="appoinment-right">
                        <form action="#">
                            <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <h3>Pay through online</h3>
                                <label for="name">Enter customer ID:</label>
                                <input type="text" id="name" required>
                            </div>
                            <button class="rts-btn btn-primary mt--30">Pay Bill</button>
                        </form>
                    </div>
                    <!-- appoinment-right End -->
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end -->
@endsection
