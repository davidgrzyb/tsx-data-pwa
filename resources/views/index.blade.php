  
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="{{ asset('img/icon.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/icon.png') }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>Live TSX Data</title>
</head>
<body class="flex flex-col h-screen bg-gray-300">
    <header class="w-full bg-white mb-4">
        <div class="container mx-auto flex items-center justify-between p-4">
            <a href="/" class="text-xl">Live TSX Data</a>
            <div class="">
                <!-- <a href="#" class="p-3 mx-1 hover:bg-gray-200 rounded">Search</a>
                <a href="#" class="p-3 mx-1 hover:bg-gray-200 rounded">Portfolio</a>
                <a href="#" class="p-3 mx-1 hover:bg-gray-200 rounded">Log Out</a> -->
            </div>
        </div>
    </header>

    <div id="app"></div>

    <footer class="bg-white">
        <div class="container mx-auto text-center text-gray-600 p-3">
            For educational purposes only.
        </div>
    </footer>

    <script src="js/app.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167955454-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-167955454-2');
    </script> -->
</body>
</html>