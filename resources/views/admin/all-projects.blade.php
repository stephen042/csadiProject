@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">All Projects</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section>
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-lg-4">
            <!-- Card with an image on top -->
            <div class="card">
                {{-- images will be worked on after project upload --}}
                <img src="{{asset('storage/'.$project->placeholder_image)}}" class="card-img-top" alt="..." height="250" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title p-2">{{$project->heading}}</h5>
                    <hr class="m-0">
                    <p class="card-text">
                    <div class="meta">
                        <ul>
                            <li>
                                </i><span class="text-primary">{{$project->starting_date}} -
                                    {{$project->ending_date}}
                                </span>
                            </li>
                            <li>Target Beneficiaries <span class="text-primary"> -
                                    {{$project->target_beneficiaries}}
                                </span>
                            </li>
                            <li>Funded By <span class="text-primary"> - {{$project->funded_by}}</span>
                            </li>
                            <li>
                                Location <span class="text-primary"> - {{$project->location}}</span>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <a href="{{ route('edit_project',[$project])}}" class="btn btn-primary btn-sm float-start">Edit Project</a>
                    <a href="{{ route('projects-details',[$project])}}" target="_blank" class="btn btn-info btn-sm float-end">view Project</a>
                    </p>
                </div>
            </div><!-- End Card with an image on top -->
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $projects->links() }}
    </div>
</section>
@endsection