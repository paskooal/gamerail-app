@extends('layouts.dashboard')
@section('title', 'GameRail')
@section('devarea')
@section('navlink1', 'Início')
@section('navlink2', 'Ofertas')
@section('navlink3', 'Categorias')
@section('navlink4', 'Contato')
<a href="{{ route("games.index") }}">Área Dev</a>
@endsection
@section('content')
<p class="font-tale">pimparrilho</p>
            @endsection