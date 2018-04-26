@extends('layout')


@section('title', "Crear usuario")

@section('content')
    <h1>Crear usuario</h1>

<form method="POST" action="{{ url('usuarios') }}">
    {!! csrf_field() !!}

    <label for="name">Nombre:</label>
    <input type="text" name="nombre" id="name" placeholder="Pedro Perez">

    <label for="email">Email:</label>
    <input type="email" name="correo" id="email" placeholder="pedro@example.com">

    <label for="password">Contraseña:</label>
    <input type="password" name="clave" id="password"placeholder="Mayor a 6 caracteres">

    <button type="submit">Crear usuario</button>
</form>

    <!--<p><a href="{{ url('/usuarios') }}">Regresar</a></p>-->
    <p><a href="{{ route('users.index') }}">Regresar al listado de usuarios</a></p>

@endsection
