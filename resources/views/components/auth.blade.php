<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>--}}
    <link href="/public/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="auth">
    {{ $slot }}
    <div class="auth__image">
        <img src="{{ asset('../../../images/login_1.png') }}" alt="" class="auth__top-image"/>
        <img src="{{ asset('../../../images/login_2.png') }}" alt="" class="auth__bottom-image"/>
    </div>
</div>

</body>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>



