<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div style="background:#28a745;color:white;text-align:center;padding:10px;font-size:24px;font-weight:bold;">
    <img src="{{ asset('imgs/logo.png') }}" alt="Logo Beauté Naturelle" style="height:40px;margin-right:10px;">
    Beauté Naturelle
</div>

@include('Menu')

<div class="container mt-4">
    @yield('content')
</div>

@include('Footer')

</body>
</html>
