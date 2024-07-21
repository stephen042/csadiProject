@extends('layouts.home')

@section('content')

<!-- Start Braedcrumb ============================================= -->
<div class="text-center bg-fixed shadow breadcrumb-area dark padding-xl text-light"
    style="background-image: url({{$project->placeholder_image }});">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-left">
                <h1>Project Details</h1>
            </div>
            <div class="col-md-6 col-sm-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Project</a></li>
                    <li class="active">Single</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Portfolio============================================= -->
<div class="portfolio-details default-padding" wire:key="{{$project->id}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 carousel">
                <div class="pf-thum-carousel owl-carousel owl-thumb">
                    @php
                        $imageUrls = json_decode($project->images, true); 
                    @endphp
                    @foreach ($imageUrls as $img)
                        <img src="{{$img}}" alt="Thumb">
                    @endforeach

                </div>
            </div>
            <div class="col-md-12 conetnt">
                <h2>{{$project->heading}}</h2>
                <p>
                    {{$project->description}}
                </p>
                <div class="bottom-info">
                    <div class="share">
                        <ul>
                            <li>view Project post on Facebook: </li>
                            <li>
                                <a href="{{$project->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Portfolio -->
@endsection