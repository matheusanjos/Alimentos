<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos</title>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- CSS Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success">
        <a href="/" class="navbar-brand">Laravel</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarItems">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarItems" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li @if($current == "alimentos") class="nav-item active" @else class="nav-item" @endif>
                    <a href="/alimentos" class="nav-link">Alimentos</a>
                </li>
                <li @if($current == "tipos") class="nav-item active" @else class="nav-item" @endif>
                    <a href="/tipos" class="nav-link">Tipos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
    @hasSection ('content')
        @yield('content')
    @endif
    </div>
</body>
</html>
