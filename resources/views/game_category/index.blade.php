@extends('store')

@section('content')

<h1>aqui serão listados todas as categorias de jogos</h1>

@foreach ($game_categories as $game_category)
    <li>{{ $game_category->name }}</li> |
    <a href="{{ route('gameCategories.edit', ['gameCategory' => $game_category->id]) }}">Edit</a> |
    <a href="">Delete</a>
@endforeach

@endsection