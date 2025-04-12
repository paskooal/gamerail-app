@extends('store')

@section('content')

<h1>aqui serão editados as categorias de jogos</h1>

<form action="{{ route('gameCategories.update', ['gameCategory' => $gameCategory->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $gameCategory->name }}">
    <input type="text" name="description" value="{{ $gameCategory->description }}">
    <input type="text" name="image" value="{{ $gameCategory->image }}">
    <button type="submit">Enviar</button>
</form>

@endsection