<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin/app.css') }}">
    <link rel="shortcut icon" href="/public/assets/img/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>

    @include('admin.templates.header')

    <main>
        @yield('content')
    </main>

    @include('admin.templates.footer')

    <script src="{{ URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    @yield('js')
</body>
</html>
