@extends('layouts.home')

@section('content')
     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="text-center bg-fixed shadow breadcrumb-area dark padding-xl text-light" style="background-image: url(assets/assets/img/banner/10.jpg);">
        <div class="container">
            <div class="row">
                <div class="text-left col-md-6 col-sm-6">
                    <h1>Our Projects</h1>
                </div>
                <div class="text-right col-md-6 col-sm-6">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
    ============================================= -->
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="text-center portfolio-items-area">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="text-center mix-item-menu active-theme">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Food</button>
                            <button data-filter=".design">Home</button>
                            <button data-filter=".photography">Education</button>
                            <button data-filter=".branding">Children</button>
                            <button data-filter=".video">Water</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="portfolio-items col-4">
                                <div class="pf-item branding photography">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/1.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/1.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                                <div class="pf-item video development">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/2.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/2.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item design photography">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/3.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/3.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item branding video">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/4.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/4.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item design photography">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/11.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/11.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item branding design development">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/4.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/4.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item photography">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/7.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/7.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item design development">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/66.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/66.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item design development">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/22.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/22.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item design development">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/33.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/33.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item design development">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/44.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/44.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <div class="pf-item design development">
                                    <div class="item-inner">
                                        <img src="assets/assets/img/gallery/55.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="assets/assets/img/gallery/55.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
@endsection