<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/mkn2vlg.css">
</head>
<body>
    <x-nav></x-nav>
    {{ $slot }}
    <x-footer></x-footer>
    <script src="{{ asset('js/main.js') }}" type="module"></script>
</body>
</html>
