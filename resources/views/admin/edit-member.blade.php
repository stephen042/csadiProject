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
      <livewire:admin.edit-member :member="$member" />
    </div>
  </div>
</section>
@endsection