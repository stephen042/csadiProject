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

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Members</h5>
                    <div class="table-responsive table-responsive-x">
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Organizer</td>
                                    <td>2016-05-25</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="" class="btn btn-sm btn-primary m-1"><i
                                                    class="bi bi-pencil-square"></i>
                                                view
                                            </a>
                                            <button class="btn btn-sm btn-danger m-1" wire:click="deleteUser()"
                                                wire:confirm="Are you sure you want to delete this user?">
                                                <i class="bi bi-archive-fill"></i>
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>

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
                            <li>Funded By <span class="text-primary"> -  Mrs. Tomasa Stiedemann</span>
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