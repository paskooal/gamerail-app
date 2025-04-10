@extends('store')

@section('content')

<h1>aqui serão listados todas as categorias de jogos</h1>

@foreach ($game_categories as $game_category)
    <li>{{ $game_category->name }}</li>
@endforeach

@endsection