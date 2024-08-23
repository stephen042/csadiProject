@extends('layouts.home')

@section('content')
<!-- Start Braedcrumb ============================================= -->
<div class="text-center bg-fixed shadow breadcrumb-area dark padding-xl text-light"
style="background-image: url('{{ asset('storage/' . $project->placeholder_image) }}');">
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
                <div class="pf-thum-carousel owl-carousel owl-thumb pf-thum-carousel-project">
                    @php
                    $imageUrls = json_decode($project->images, true);
                    @endphp
                    @foreach ($imageUrls as $img)
                    <img src="{{ asset('storage/' . $img) }}" alt="Thumb" class="carousel-img-project">
                    @endforeach
                </div>
            </div>            
            <div class="col-md-12 conetnt">
                <ul>
                    <li>Duration <span> <i class="fas fa-calendar-alt"></i> {{$project->starting_date}} -
                            {{$project->ending_date}}</span></li>
                    ||
                    <li>Target Beneficiaries <span> <i class="fas fa-users"></i>
                            {{$project->target_beneficiaries}}</span>
                    </li>
                    ||
                    <li>Funded By <span> <i class="fa fa-wallet"></i> {{$project->funded_by}}</span>
                    </li>
                    ||
                    <li>
                        Location <span> <i class="fas fa-map-marker-alt"></i> {{$project->location}}</span>
                    </li>
                </ul>
                <hr>
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
                    <div class="row my-5">
                        <div class="col col-md-12">
                           <button class="btn btn-primary" onclick="window.location.href='{{ route('projects')}}'">
                            <<< Back To projects</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Portfolio -->
@endsection