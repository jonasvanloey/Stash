<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="<?php echo asset('font-awesome/css/font-awesome.min.css')?>"rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/style.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/login.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/geleverd.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/verwacht.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/mobile.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/verwacht-mobile.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/geleverd-mobile.css')?>" rel="stylesheet" type="text/css">

</head>
<body>


        @yield('content')

    <div class="languages"><ul>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul></div>

    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('js/main.js') !!}"></script>
</body>
</html>
