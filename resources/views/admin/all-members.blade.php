@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">All Member</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section>
    <div class="row">
        @foreach ($members as $member)
        <div class="col-lg-4">
            <!-- Card with an image on top -->
            <div class="card">
                {{-- images will be worked on after project upload --}}
                <img src="{{asset('storage/'.$member->image)}}" class="card-img-top" alt="..." height="250"
                    style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title p-2">{{$member->name}}</h5>
                    <hr class="m-0">
                    <p class="card-text">
                    <div class="meta">
                        <ul>
                            <li>
                                </i>Position -<span class="text-primary"> {{$member->position}}
                                </span>
                            </li>
                            <li>
                               Description - {{$member->description}}
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <a href="{{route('edit_member',[$member->id])}}" class="btn btn-primary btn-sm float-start">Edit member's details</a>
                </div>
            </div><!-- End Card with an image on top -->
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $members->links() }}
    </div>
</section>
@endsection