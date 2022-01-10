<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- TailwindCSS output -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-full">
    <div class="h-full">
        @include('partials.header')
        <div class="container mx-auto px-4 flex flex-col">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</body>

</html>