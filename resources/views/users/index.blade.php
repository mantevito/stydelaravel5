@extends('layout')

@section('content')
	<h1>{{ $title }}</h1>

	<ul>
		@forelse ($users as $user)
			<li>{{ $user->name }}, ({{ $user->email }})</li>
            <a href="{{ route('users.show', ['id' => $user->id]) }}"> Ver detalles</a>
        @empty
			<li>No hay usuarios registrados.</li>
		@endforelse
	</ul>
@endsection

@section('sidebar')

	@parent
<h2>Barra lateral personalizada!</h2>

@endsection