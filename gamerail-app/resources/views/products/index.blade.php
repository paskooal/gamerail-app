@extends('store')

@section('content')

<h1>aqui serão listados todos os produtos</h1>

@foreach ($products as $product)
    <li>{{ $product->name }}</li> |
    <a href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a> |
    <a href="">Delete</a>
@endforeach

@endsection