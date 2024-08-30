@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Profile</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<hr>
<x-message />
<section class="section">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Member</h5>
                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('post_profile') }}" method="post">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Old Password</label>
                            <input type="text" class="form-control" value="" name='old_password'>
                            @error('old_password')
                            <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">New Password</label>
                            <input type="password" class="form-control" value="" name='password'>
                            @error('password')
                            <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" value="" name='password_confirmation'>
                            @error('password_confirmation')
                            <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary confirm float-start">Update</button>
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