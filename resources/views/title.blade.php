@extends('layouts.app')

@section('content')
	@foreach ($movies as $movie)
		<div class="container">
			{{-- SINTASSI CORRETTA --}}
			<div>Titolo Originale: {{ $movie->original_title }}</div>
			<div>Voto: {{ $movie->vote }}</div>
			<hr>
		</div>
	@endforeach
@endsection
