@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Create Project</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<x-message />
<section>
    <div class="col">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Project</h5>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('post_create_project') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Project Heading or Title</label>
                        <input type="text" class="form-control" name="heading"
                            placeholder="e.g Project Heading or Title" value="{{ old('heading') }}">
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
                            value="{{ old('location') }}">
                        @error('location')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Target Beneficiaries</label>
                        <input type="text" class="form-control" name="target_beneficiaries"
                            placeholder="e.g women, children" value="{{ old('target_beneficiaries') }}">
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
                            value="{{ old('funded_by') }}">
                        @error('funded_by')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
                        @error('start_date')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">End Date <span class="text-info">*optional*</span> </label>
                        <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}">
                        @error('end_date')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="floatingTextarea">Project Descriptions</label>
                        <textarea class="form-control" name="description" placeholder="Description"
                            id="floatingTextarea" style="height: 100px;">{{ old('description') }}</textarea>
                        @error('description')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Facebook Link to the project <span class="text-info">*optional*</span></label>
                        <input type="url" class="form-control" name="facebook_link" value="{{ old('facebook_link') }}">
                        @error('facebook_link')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="text-center">
                        <hr>
                        <button type="submit" class="btn btn-primary float-start confirm">Submit</button>
                        <button type="reset" class="btn btn-secondary float-end">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
</section>
@endsection