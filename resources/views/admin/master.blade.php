<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{ asset('admin/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href=" {{ asset('admin/css/fontawesome.min.css') }}" >
    <link rel="stylesheet" href=" {{ asset('admin/css/fontawesome.css') }}" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Style CSS-->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!--index.htmlScript-->
    <script src="{{ asset('admin/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>--}}

    <title>@yield('title')</title>
</head>
<body>
<!-- ~~ Header Start~~ -->
<section id="header">
    @include('admin.includes.header')
</section>
<!-- ~~ Header End~~ -->

<!-- ~~ Self Learn Start~~ -->
<div class="container">
    <div class="row">

        <!--sidebar-->

    @include('admin.includes.sidebar')

        <!--main content -->
        <div class="col-md-9">

        @yield('content')
        </div>
    </div>

</div>
<!-- ~~ Self Learn End~~ -->

<!-- ~~ Footer Part Start ~~ -->
@include('admin.includes.footer')
<!-- ~~ Footer Part End ~~ -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/script.js') }}"></script>
@yield('script')
</body>
</html>
