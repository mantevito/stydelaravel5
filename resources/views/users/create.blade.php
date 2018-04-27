@extends('layout')


@section('title', "Crear usuario")

@section('content')
    <h1>Crear usuario</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los siguientes errores</h6>
{{--            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>--}}
        </div>

    @endif

    <form method="POST" action="{{ url('usuarios') }}">
        {!! csrf_field() !!}

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="Pedro Perez" value="{{old('name')}}">
        @if($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="pedro@example.com" value="{{old('email')}}">

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password"placeholder="Mayor a 6 caracteres">

        <button type="submit">Crear usuario</button>
    </form>

    <!--<p><a href="{{ url('/usuarios') }}">Regresar</a></p>-->
    <p><a href="{{ route('users.index') }}">Regresar al listado de usuarios</a></p>

@endsection
