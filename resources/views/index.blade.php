  
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
<body class="bg-gray-300">

    <div id="app"></div>

    <script src="js/app.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167955454-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-167955454-2');
    </script>
</body>
</html>