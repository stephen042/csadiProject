@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Edit Project</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<x-message />
<button class="btn btn-primary m-2" onclick="history.back()">
    <i class="bi bi-house"></i>
    Back
</button>
<hr>
<section>
    <div class="col">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Project</h5>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('post_edit_project',[$project->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Project Heading or Title</label>
                        <input type="text" class="form-control" name="heading"
                            placeholder="e.g Project Heading or Title" value="{{ $project->heading }}">
                        @error('heading')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">PlaceHolder Image</label>
                        <input type="file" name="placeholder_image" class="form-control">
                        @error('placeholder_image')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="e.g Abuja town hall"
                            value="{{ $project->location }}">
                        @error('location')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Target Beneficiaries</label>
                        <input type="text" class="form-control" name="target_beneficiaries"
                            placeholder="e.g women, children" value="{{$project->target_beneficiaries}}">
                        @error('target_beneficiaries')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Projects Images <span class="text-info">*upload all
                                images here*</span></label>
                        <input type="file" multiple name="images[]" class="form-control">
                        @error('images.*')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Funded By</label>
                        <input type="text" class="form-control" name="funded_by" placeholder="e.g Mrs Charles John"
                            value="{{$project->funded_by}}">
                        @error('funded_by')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" value="{{$project->starting_date}}">
                        @error('start_date')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">End Date <span class="text-info">*optional*</span>
                        </label>
                        <input type="date" name="end_date" class="form-control" value="{{$project->ending_date}}">
                        @error('end_date')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="floatingTextarea">Project Descriptions</label>
                        <textarea class="form-control" name="description" placeholder="Description"
                            id="floatingTextarea" style="height: 100px;">{{$project->description}}</textarea>
                        @error('description')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Facebook Link to the project <span
                                class="text-info">*optional*</span></label>
                        <input type="url" class="form-control" name="facebook_link" value="{{$project->facebook_link}}">
                        @error('facebook_link')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="text-center">
                        <hr>
                        <button type="submit" class="btn btn-primary float-start confirm">Update</button>
                        <a href="{{ route('projects-details',[$project])}}" target="_blank"
                            class="btn btn-info btn-sm float-end">view Project</a>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
</section>
@endsection