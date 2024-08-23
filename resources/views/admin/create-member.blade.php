@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Create Member</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<hr>
<x-message />
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Member</h5>
                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('create_member') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Full Name</label>
                            <input type="text" class="form-control" value="{{ old('full_name')}}" name='full_name'>
                            @error('full_name')
                            <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Position</label>
                            <input type="text" class="form-control" value="{{ old('position')}}" name='position'>
                            @error('position')
                            <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Image</label>
                            <input type="file" class="form-control" name='image'>
                            @error('image')
                            <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Start date <span
                                    class="text-primary">*Optional*</span></label>
                            <input type="date" class="form-control" value="{{ old('start_date') }}" name='start_date'>
                        </div>
                        <div class="col-12">
                            <label for="floatingTextarea">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description"
                                id="floatingTextarea" style="height: 100px;">{{ old('description')}}</textarea>
                            @error('description')
                            <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary confirm">Create</button>
                            <button type="reset" class="btn btn-warning float-end">Reset</button>
                        </div>
                    </form>
                    <!-- Vertical Form -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection