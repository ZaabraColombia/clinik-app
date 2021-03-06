<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcat icon" href="{{asset('/img/logos/zaabrasalud-favicon.png')}}">
    <link rel="icon" href="{{asset('/img/logos/zaabrasalud-favicon.png')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--    Css plugins    -->
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!--    Css    -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title> Login </title>
</head>
<body>
<div class="container">
    <div class="row main_row my-5">
        <div class="col-10 sidebar_logo">
            <img src="{{ asset('img/logo/logo.png') }}" alt="logo">
        </div>

        <div class="content_form col-10 col-md-7 col-lg-5">
            <form method="POST" action="{{ route('sharepoint') }}" class="card_login">
                @csrf

                <div class="form-group">
                    <label for="sharepoint">{{__('trans.sharepoint')}}</label>
                    <input type="text" class="form-control" id="sharepoint" name="sharepoint" value="{{ old('sharepoint') }}">
                </div>
                <div class="form-group buttom_save">
                    <button type="submit" class="btn">{{ __('trans.search') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--    Plugins    -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugin/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Alerts -->
@include('sweetalert::alert')


</body>
</html>
