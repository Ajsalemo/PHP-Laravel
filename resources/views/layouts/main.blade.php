<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- TailwindCSS output -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="relative min-h-full">
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>