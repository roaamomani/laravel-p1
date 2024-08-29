<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Add other CSS files here -->
</head>
<body>
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- Footer -->
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- Add other JS files here -->
</body>
</html>
