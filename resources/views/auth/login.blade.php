@extends('layouts.auth')

@section('content')
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{asset('assets/assets/img/logo.png')}}" alt="">
                            <span class="d-none d-lg-block">CSADI</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <livewire:auth.login />
                    </div>

                    {{-- <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div> --}}

                </div>
            </div>
        </div>

    </section>

</div>
@endsection