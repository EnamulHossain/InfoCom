<div class="col-lg-12">
    <div class="d-flex justify-content-end" style="background-color: burlywood">
        <a href="{{ asset('assets/pdf/.pdf') }}" class="btn btn-secondary"
            target="_blank">BTRC_Approved</a>
    </div>
</div>

@include('front.partials.header')
<br>
<br>
<br>
@yield('front')
@include('front.partials.footer')

