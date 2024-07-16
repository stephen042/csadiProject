<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="infoription" content="Charities - Charity & Nonprofit Template">

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/flaticon-charity-set.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/bootsnav.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/responsive.css')}}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="assets/js/html5/html5shiv.min.js"></script>
        <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <title>{{ env('APP_NAME')}} - {{$title ?? ""}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        .socials {
            font-size: 20px;
        }

        .fbSocials {
            color: rgb(71, 71, 236);
        }

        .lkSocials {
            color: rgb(89, 185, 234);
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-900">
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->


    <!-- Start Header Top 
    ============================================= -->
    <livewire:home.startheader />
    <!-- End Header Top -->

    <!-- Header ============================================= -->
    <livewire:home.header />
    <!-- End Header -->

    <!-- Start page main content #put page content here ============================================= -->
    @yield('content')


    <!-- Start Footer ============================================= -->
    @include('includes.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks ============================================= -->
    @include('includes.scripts')

</body>

</html>