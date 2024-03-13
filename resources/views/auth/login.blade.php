<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>

<body>
    <section class="forms-section">
        <h1 class="section-title">Prueba Dima</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form class="form form-login" method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset>
                        <legend>Ingresa tu correo electronico.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="login-password" type="password" name="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form class="form form-signup" method="POST" action="{{ route('register') }}">
                    @csrf
                    <fieldset>
                        <div class="input-block">
                            <label for="signup-name">Nombre</label>
                            <input id="signup-name" type="text" name="name" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Contraseña</label>
                            <input id="signup-password" type="password" name="password" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirmar contraña</label>
                            <input id="signup-password-confirm" type="password" name="password_confirmation" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-genero">Genero</label>
                            <select id="signup-genero" name="genero" required>
                                <option value="">Seleccione su Genero</option>
                                <option value="masculino">masculino</option>
                                <option value="femenino">femenino</option>
                            </select>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup">Continue</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-guest">
                    Invitado
                    <span class="underline"></span>
                </button>
                <form class="form form-guest" method="POST" action="{{ route('guest.store') }}">
                    @csrf
                    <fieldset>
                        <legend>Por favor, ingresa tu nombre.</legend>
                        <div class="input-block">
                            <label for="guest-name">Nombre</label>
                            <input id="guest-name" type="text" name="name" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-guest">Continuar</button>
                </form>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
