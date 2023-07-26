<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('backend/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/sidebar.css')}}">
</head>
<body>
    <main>
        <aside>
            @include('admin.partials.sidebar')
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    <script src="{{asset('backend/js/global.js')}}"></script>
</body>
</html>