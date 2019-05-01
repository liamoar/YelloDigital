
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>

    @include('inc.navbar')
    @yield('content')

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
