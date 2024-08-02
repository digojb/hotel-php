<!DOCTYPE html>
<html>
<head>
    <title>Hotel Reservations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <a class="navbar-brand" href="/">Hotel Reservations</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('quartos.index') }}">Quartos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-section">Sobre</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
                    <form action="/logout" method="POST" style="display: inline;">
                        @csrf
                        <a href="/logout" 
                           class="nav-link" 
                           onclick="event.preventDefault();
                           this.closest('form').submit();">
                           Sair
                        </a>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Cadastrar</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
