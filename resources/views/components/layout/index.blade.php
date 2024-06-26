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

<div class="layout">
    <div class="layout__header">
        <x-layout.header/>
    </div>

    <x-layout.main>
        {{ $slot }}
    </x-layout.main>

    <div class="layout__footer">
        <x-layout.footer/>
    </div>

</div>

</body>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>
