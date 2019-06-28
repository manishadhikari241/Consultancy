<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    @yield('title')

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    {{--<link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('css/Frontend/slick.css')}}">
    <!-- themefy-icon -->
    {{--<link rel="stylesheet" href="{{asset('css/Frontend/themify-icons.css')}}">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('css/Frontend/animate.css')}}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('css/Frontend/aos.css')}}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('css/Frontend/venobox.css')}}">

    <!-- Main Stylesheet -->
    <link href="{{asset('css/Frontend/style.css')}}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>

@include('Frontend.layouts.header')

@yield('content')
@include('Frontend.layouts.footer')

@include('Frontend.layouts.scripts')

</body>
</html>