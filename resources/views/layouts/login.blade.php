@extends('layouts.login')
@section('title', 'Fazer Login')

@section('content')
@section('char')
<div class="hidden w-64 sm:flex flex-col pl-10">
    <img class="" src="{{ asset("images/rouxlsShop.webp") }}" alt="shop">
    <span class="font-tale p-2 bg-black border-2 text-pretty border-white text-white">
        Desvenda, nobre visitante, a vasta panóplia de jogos virtuais na GameRail.
    </span>
</div>
@endsection

<form method="POST" id="form" data-parsley-validate action="{{ route('login') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input
            id="name"
            class="block w-full"
            type="text"
            name="name"
            :value="old('name')"
            required
            autofocus
            autocomplete="name"
            data-parsley-required-message="Digite seu nome." />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input
            id="password"
            class="block w-full"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            data-parsley-required-message="Digite sua senha." />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Esqueceu a senha -->
    <div class="mb-1 mt-4">
        @if (Route::has('password.request'))
            <x-link href="{{ route('password.request') }}" :value="__('Esqueceu sua senha?')" />
        @endif
    </div>

    <!-- Remember Me -->
    <div class="block mb-1">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" name="remember" type="checkbox"
                   class="cursor-pointer hover:ring-2 hover:ring-purple-600 rounded transition-all border-white text-purple-600 shadow-sm focus:ring-fuchsia-600">
            <span class="ms-2 text-sm text-gray-200">{{ __('Lembre de mim') }}</span>
        </label>
    </div>

    <!-- Botão -->
    <x-primary-button class="flex justify-center w-64 mt-2 mb-1">
        {{ __('Fazer Login') }}
    </x-primary-button>

    <!-- Link de registro -->
    <div class="flex flex-col items-center justify-start mb-3">
        <x-link href="{{ route('register') }}" :value="__('Não tem uma conta?')" />
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('form');
        if (typeof $(form).parsley === 'function') {
            $(form).parsley();
        } else {
            console.error('Parsley.js não está carregado!');
        }
    });
</script>
@endsection
