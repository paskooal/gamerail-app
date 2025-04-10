@extends('store')

@section('content')

<h1>aqui serão listados todas as empresas</h1>

@foreach ($companies as $company)
    <li>{{ $company->name }}</li>
@endforeach

@endsection