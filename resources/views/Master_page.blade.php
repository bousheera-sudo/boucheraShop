<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="welcome-section">
    <div class="container">
        <div class="header-logo">
            <img src="{{ asset('imgs/logo.png') }}" alt="Logo Beauté Naturelle">
            <h1>Beauté Naturelle</h1>
        </div>
    </div>
</div>

@include('Menu')

<div class="container mt-4">
    @yield('content')
</div>

@include('Footer')

</body>
</html>
