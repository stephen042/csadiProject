@extends('layouts.home')

@section('content')
<!-- Start Breadcrumb 
    ============================================= -->
<div class="text-center bg-fixed shadow breadcrumb-area dark padding-xl text-light"
    style="background-image: url(assets/assets/img/pics/ANRIN/BA.jpg);">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-6 col-sm-6">
                <h1>Event</h1>
            </div>
            <div class="text-right col-md-6 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">Projects</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Event
    ============================================= -->
<div class="event-area default-padding">
    <div class="container">
        <div class="row">
            <div class="event-items event-list-full inner-cell">

                <livewire:home.projects-view />

            </div>
        </div>
    </div>
</div>
<!-- End Event -->
@endsection