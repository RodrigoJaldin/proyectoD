<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Layout</title>

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="sidebar">
        <ul>
            @if (auth()->check())
                <li><a href="/home">{{ auth()->user()->name }}</a></li>
                @if (auth()->user()->genero == 'masculino')
                    <li><a href="{{ route('mascotas.index') }}">Perros</a></li>
                    <li><a href="{{ route('favoritos.index') }}">Favoritos</a></li>
                @elseif (auth()->user()->genero == 'femenino')
                    <li><a href="{{ route('mascotas.index') }}">Gatos</a></li>
                @endif
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Registro</a></li>
            @endif
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
