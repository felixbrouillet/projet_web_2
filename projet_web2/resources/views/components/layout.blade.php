<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Découvrez le festival de musique électronique à Montréal du 22 au 24 juillet 2023. Profitez de performances incroyables, de DJs renommés et de l'ambiance électrisante de l'été montréalais."/>
    <meta name="keywords" content="Festival musique électronique, Montréal, 22-24 juillet 2023, DJs, performances live, événement estival" />
    <meta property="og:title" content="Festival de Musique Électronique à Montréal - 22-24 Juillet 2023" />
    <meta property="og:description" content="Profitez de performances incroyables, de DJs renommés et de l'ambiance électrisante de l'été montréalais lors du festival de musique électronique à Montréal du 22 au 24 juillet 2023." />
    <meta name="robots" content="index, follow" />
    <!-- Intégration de Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=407769223"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '407769223');
    </script>
    <title>{{ $titre }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/mkn2vlg.css">
</head>
<body>
    <x-nav></x-nav>
    {{ $slot }}
    <div id="cursor"></div>
    <script src="{{ asset('js/main.js') }}" type="module"></script>
</body>
</html>
