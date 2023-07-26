<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{assets('css/global.css')}}
</head>
<body>
    @include('admin.partials.header')
    @yield('content')
    @include('admin.partials.footer')

    {{assets('js/global.js')}}
</body>
</html>