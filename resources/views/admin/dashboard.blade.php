@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <livewire:admin.memberstable :members="$members" />
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-lg-4">
            <!-- Card with an image on top -->
            <div class="card">
                <img src="assets/assets/img/pics/ADFINR/ANKL.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title p-2">Food and Schooling in kastina</h5>
                    <hr class="m-0">
                    <p class="card-text">
                    <div class="meta">
                        <ul>
                            <li>
                                </i><span class="text-primary">2016 - 2019 </span>
                            </li>
                            <li>Target Beneficiaries <span class="text-primary"> - Women, Children </span>
                            </li>
                            <li>Funded By <span class="text-primary"> - Mrs. Tomasa Stiedemann</span>
                            </li>
                            <li>
                                Location <span class="text-primary"> - Tracyborough</span>
                            </li>
                        </ul>
                    </div>
                    </p>
                </div>
            </div><!-- End Card with an image on top -->
        </div>
    </div>
</section>
@endsection