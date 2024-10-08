<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos - Sentirse Bien Spa</title>
</head>

<body>
    @include('partials.header')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Iniciar Sesión</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('iniciar-sesion') }}">
                            @csrf

                            <div class="mb-3 row">

                            @if ($errors->any())
                                <div class="alert alert-danger">

                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach

                                </div>
                            @endif

                                <label for="nombre" class="col-md-4 col-form-label text-md-end">Usuario</label>
                                <div class="col-md-6">
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Iniciar Sesión
                                    </button>
                                    <a href="{{ url('/') }}" class="btn btn-warning">
                                        Volver
                                    </a>

                                    <br><br>
                                    <p>¿No tienes cuenta?
                                        <a href="{{ url('/registroUsuario') }}">
                                            Regístrate
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

</body>

</html>