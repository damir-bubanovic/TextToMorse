<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Morse Code Generator">
        <meta name="keywords" content="morse code, radio, telegraph, ship, submarine, range, morse, code, dot, dash">
        <meta name="author" content="Damir Bubanovic">

        <title>Morse Code Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app" class="full-height flex-center position-ref">
            <morse-component></morse-component>
        </div>

        {{-- Go To Creator --}}
        <div class="fixed-bottom">
            @include('components.creator')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
