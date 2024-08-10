@extends('layouts.home')

@section('content')
     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="text-center bg-fixed shadow breadcrumb-area dark padding-xl text-light" style="background-image: url(assets/assets/img/pics/ANRIN/A.jpg);">
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
    <livewire:home.gallery />
    <!-- End Portfolio -->
@endsection