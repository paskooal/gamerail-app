@extends('store')

@section('content')

<h1>aqui serão listados todas as categorias de produtos</h1>

@foreach ($prod_categories as $prod_category)
    <li>{{ $prod_category->name }}</li> |
    <a href="{{ route('prodCategories.edit', ['prodCategory' => $prod_category->id]) }}">Edit</a> |
    <a href="">Delete</a>
@endforeach

@endsection