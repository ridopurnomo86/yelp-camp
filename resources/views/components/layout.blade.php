<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-sidebar />
    <div class="mx-auto container">
        <x-navbar />
        {{ $slot }}

    </div>
    <footer class="mx-auto container py-10">
            <img src="{{ asset('assets/icons/Logo.svg') }}" alt="logo-icon" />
    </footer>
    <script src="{{ asset('js/sidebar.js')}}"></script>
</body>
</html>