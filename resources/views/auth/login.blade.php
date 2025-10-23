@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_header', 'Iniciar sesión')

@section('auth_body')
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="nombreUsuario" class="form-control" placeholder="Usuario" required autofocus>
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-user"></span></div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña" required>
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
    </form>
@endsection
