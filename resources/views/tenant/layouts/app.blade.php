<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="#">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--    Css plugins    -->
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    @yield('styles')

    <!--    Css    -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<input type="checkbox" id="nav_toggle">
@include('tenant.layouts.navigations')

<div class="main_content">
    <!-- Fecha -->
    <div class="header_date_mail py-1 px-3">
        <h5 id="today-header" class="text_h5">{{ date('Y/M d') }}</h5>
        <h5 class="text_h5">servicioalcliente@zaabrasalud.co</h5>
    </div>

    <!-- Sidebar header -->
    <header class="header_main px-3 pl-lg-0">
        @include('tenant.layouts.header')
    </header>

    <main class="px-3">
        @yield('content')
    </main>
</div>

<!--    Plugins    -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugin/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<!-- Alerts -->
@include('sweetalert::alert')

<!--    Scripts    -->
@yield('scripts')
</body>
</html>
