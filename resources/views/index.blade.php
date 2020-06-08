  
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="{{ asset('img/icon.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/icon.png') }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>TMX Live Data</title>
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body class="flex flex-col bg-gray-300 container mx-auto">
    <header class="w-full bg-white text-center text-xl p-4 mb-4">
        Live TMX Data
    </header>
    <div id="mute"></div>
    <div id="app"></div>

    <!-- <footer class="bg-white text-center text-gray-600 p-3">
        Built by <a href="https://davidgrzyb.com" class="underline">David Grzyb</a>
    </footer> -->

    <script src="js/app.js"></script>
</body>
</html>