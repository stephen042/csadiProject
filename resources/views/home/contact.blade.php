@extends('layouts.home')

@section('content')

<!-- Start Breadcrumb 
    ============================================= -->
<div class="text-center bg-fixed shadow breadcrumb-area dark padding-xl text-light"
    style="background-image: url(assets/assets/img/pics/SHARP/ABC.jpg);">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-6 col-sm-6">
                <h1>Contact Us</h1>
            </div>
            <div class="text-right col-md-6 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact ============================================= -->
<div class="contact-form-area default-padding">
    <div class="container">
        <div class="row">
            <div class="text-center col-md-12 address-info">
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                            Our Locations
                            <span> {{ config('app.App_address1') }}</span>
                            <hr>
                            <span> {{ config('app.App_address2') }}</span>
                        </p>
                    </li>
                    <li>
                        <a href="mailto:{{ config('app.App_mail')}}">
                            <i class="fas fa-envelope-open"></i>
                            <p>
                                Send Us Mail
                                <span>{{ config('app.App_mail')}}</span>
                            </p>
                        </a>

                    </li>
                    <li>
                        <a href="tel:{{ config('app.App_number')}}">
                            <i class="fas fa-mobile-alt"></i>
                            <p>
                                Call Us
                                <span>{{ config('app.App_number')}}</span>
                            </p>
                        </a>

                    </li>
                    <li>
                        <h3>Our Socials</h3>
                        <p style="display: flex; justify-content: space-between;">
                            <center>
                                <span><a href="#"><i class="fab fa-facebook socials fbSocials"></i></a></span>
                                <span><a href="#"><i class="fab fa-linkedin socials lkSocials"></i></a></span>
                            </center>

                        </p>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Start Maps Area 
    ============================================= -->
<div class="maps-area-items">
    <div class="maps-box oh">
        <div class="google-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1985.3299331526477!2d8.5226856!3d12.0021791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ad1cbf4e104a0f%3A0x6638d1714d52e26a!2sZoo%20Road%2C%20Kano%2C%20Nigeria!5e0!3m2!1sen!2sbd!4v1626658974671!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<!-- End Maps Area -->



@endsection