@extends('layouts.app')

@section('content')
	@foreach ($movies as $movie)
		<div class="container">
			{{-- SINTASSI SBAGLIATA PER OGGETTI --}}
			<div>Titolo: {{ $movie['title'] }}</div>
			<div>Titolo Originale: {{ $movie['original_title'] }}</div>
			<div>Nazionalita': {{ $movie['nationality'] }}</div>
			<div>Data di rilascio: {{ $movie['date'] }}</div>
			<div>Voto: {{ $movie['vote'] }}</div>
			<hr>
		</div>
	@endforeach
@endsection
