@extends('layouts.home')

@section('content')

<!-- Start Breadcrumb 
    ============================================= -->
<div class="text-center bg-fixed shadow breadcrumb-area dark padding-xl text-light"
    style="background-image: url(assets/assets/img/pics/ANRIN/FYUS.jpg);">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-6 col-sm-6">
                <h1>About Us</h1>
            </div>
            <div class="text-right col-md-6 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Our Mission
    ============================================= -->
<div class="our-mission default-padding">
    <div class="container">
        <div class="row">
            <div class="text-center site-heading">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Our Mission</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own
                        additions education satisfied the perpetual. If he cause manor happy. Without farther she
                        exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mission-items owl-carousel owl-theme">
                    <div class="item">
                        <i class="flaticon-donation"></i>
                        <h4>Donation</h4>
                        <p>
                            As greatly removed calling pleased improve an. Last ask him cold feel met spot shy want.
                            Children me laughing we prospect answered followed. At it went is song that held help face.
                        </p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="item">
                        <i class="flaticon-house-1"></i>
                        <h4>Rebuild</h4>
                        <p>
                            As greatly removed calling pleased improve an. Last ask him cold feel met spot shy want.
                            Children me laughing we prospect answered followed. At it went is song that held help face.
                        </p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="item">
                        <i class="flaticon-dove"></i>
                        <h4>Peace</h4>
                        <p>
                            As greatly removed calling pleased improve an. Last ask him cold feel met spot shy want.
                            Children me laughing we prospect answered followed. At it went is song that held help face.
                        </p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="item">
                        <i class="flaticon-pills"></i>
                        <h4>Health</h4>
                        <p>
                            As greatly removed calling pleased improve an. Last ask him cold feel met spot shy want.
                            Children me laughing we prospect answered followed. At it went is song that held help face.
                        </p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="item">
                        <i class="flaticon-vegetables"></i>
                        <h4>Food</h4>
                        <p>
                            As greatly removed calling pleased improve an. Last ask him cold feel met spot shy want.
                            Children me laughing we prospect answered followed. At it went is song that held help face.
                        </p>
                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End  Our Mission -->

<!-- Start Team Members
============================================= -->
<div class="team-members-area item-white bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="text-center site-heading">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Meet our Team</h2>
                    <p>
                        Our dedicated volunteers and team members are the driving force behind our mission. Their
                        unwavering commitment, passion, and expertise fuel our efforts to create meaningful change in
                        the community. Our volunteers bring diverse skills and perspectives, working tirelessly to
                        support our programs and initiatives. Together, our team collaborates to address challenges,
                        implement solutions, and make a tangible impact on the lives of those we serve. We value their
                        hard work, creativity, and dedication, which are essential to our success.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 team-member-info">
                <div class="team-carousel-items owl-carousel owl-theme">
                    @forelse ($members as $member)
                    <div class="item">
                        <div class="col-md-6 thumb">
                            <img src="{{asset('storage/'.$member->image)}}" alt="Team">
                        </div>
                        <div class="col-md-6 info title">
                            <h3>{{$member->name}}</h3>

                            <h5>{{$member->position}}</h5>
                            <hr>
                            <h5>About</h5>
                            <p>
                                {{$member->description}}
                            </p>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Team Members -->

<!-- Clients
    ============================================= -->
<div class="clients-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center clients-items owl-carousel owl-theme">
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/1.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/2.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/3.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/4.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/5.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/6.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/7.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/8.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/9.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="assets/assets/img/clients/1.png" alt="Clients"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Clients -->
@endsection