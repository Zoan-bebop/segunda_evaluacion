@extends('adminlte::page')

@section('title', 'Panel Principal')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1>Bienvenido al Panel</h1>

    <form action="{{ route('logout') }}" method="GET" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-sign-out-alt"></i> Cerrar sesión
        </button>
    </form>
</div>
@stop

@section('content')
    <p>Has iniciado sesión correctamente 🎉</p>
@stop

@section('footer')
    <p class="text-center mb-0">© {{ date('Y') }} - Proyecto Laravel AdminLTE</p>
@stop
