<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset("css/app.css")}}">

    <style>
        html {
            overflow:   scroll;
        }

        ::-webkit-scrollbar {
            width: 0px;
            background: transparent; /* make scrollbar transparent */
        }
    </style>

</head>
<body>

    @yield('content')
    <script src="{{ mix("/js/app.js") }}"></script>

</body>
</html>
