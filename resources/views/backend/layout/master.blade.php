<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/backend.css')}}">

    <title> Sunshine | @yield('title')</title>

    <!-- Các custom css cho từng view -->
    @yield('custom-css');
</head>

<body>

    <!-- navbar -->
    @include('backend/layout/partials/navbar')
    <!-- end navbar -->

    <div class="container-fluid">
        <div class="row">

            <!-- SlideBar -->
            @include('backend/layout/partials/slidebar')
            <!-- end SlideBar -->

            <!-- Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div style="color: red; border-bottom: 1px solid red;">
                    <h3 class="d-inline"> @yield('content-title') </h3>
                    <small> @yield('content-title-small') </small>
                </div>
                <br />

                @yield('content')
            </main>
            <!-- end content -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Custom script dành cho từng view-->
    @yield('custom-script')
</body>

</html>