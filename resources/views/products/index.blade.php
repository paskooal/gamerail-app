@extends('store')

@section('content')

<h1>aqui serão listados todos os produtos</h1>

@foreach ($products as $product)
    <li>{{ $product->name }}</li>
@endforeach

@endsection