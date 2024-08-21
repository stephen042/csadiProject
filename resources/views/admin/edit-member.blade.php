@extends('layouts.admin')

@section('content')
<div class="m-3">
  <button class="btn btn-primary" onclick="window.location.href='{{ route('dashboard')}}'">
    <i class="bi bi-house"></i>
    Back
  </button>
</div>
<x-message />
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Member's Details</h5>
          <!-- Profile Picture Display -->
          <div class="text-center mb-4">
            <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; margin: 0 auto;">
              <img src="{{ asset('storage/' . $member->image) }}" alt="Profile Picture" class="img-fluid"
                style="object-fit: cover; width: 100%; height: 100%;">
            </div>
            <p class="mt-2">Profile Picture</p>
          </div>
          <!-- Vertical Form -->
          <form class="row g-3" action="{{ route('post_edit_member', [$member->id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Full Name</label>
              <input type="text" class="form-control" value="{{ $member->name }}" name='full_name'>
              @error('full_name')
              <em class="text-danger">{{ $message }}</em>
              @enderror
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Position</label>
              <input type="text" class="form-control" value="{{ $member->position }}" name='position'>
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
              <input type="date" class="form-control" value="{{ $member->start_date }}" name='start_date'>
            </div>
            <div class="col-12">
              <label for="floatingTextarea">Description</label>
              <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea"
                style="height: 100px;">{{ $member->description }}</textarea>
              @error('description')
              <em class="text-danger">{{ $message }}</em>
              @enderror
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
          <!-- Vertical Form -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection