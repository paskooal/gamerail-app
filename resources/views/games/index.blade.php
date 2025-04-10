@extends('store')

@section('content')

<h1>aqui serão listados todos os jogos</h1>

@foreach ($games as $game)
    <li>{{ $game->title }}</li> |
    <a href="{{ route('games.edit', ['game' => $game->id]) }}">Edit</a> |
    <a href="">Delete</a>
@endforeach

@endsection