<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset("storage/logo/logo.jpeg")}}" />
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <!-- STYLES -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Bold-BS4-Animated-Back-To-Top.css')}}">
    <link rel="stylesheet" href="{{asset('css/Bold-BS4-Footer-Big-Logo.css')}}">
    <link rel="stylesheet" href="{{asset('css/Header-Blue.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/vanilla-zoom.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    @livewireStyles
    @yield('css')
</head>
<body>
@include('header')
<main class="page">
{{--    @yield('content')--}}
    {{ $slot }}
</main>
@include('footer')
@livewireScripts
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bs-init.js')}}"></script>
<script src="{{asset('js/vanilla-zoom.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<script src="{{asset('js/Bold-BS4-Animated-Back-To-Top.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>--}}
@yield('script')
</body>
</html>
