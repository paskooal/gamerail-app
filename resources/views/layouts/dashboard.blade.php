@section('navlink1')
<a href="/dashboard">Dashboard</a>
@endsection
@section('navlink2')
<a href="/games">Jogos</a>
@endsection
@section('navlink3')
<a href="/products">Produtos</a>
@endsection
@section('navlink4')
<a href="/companies">Empresas</a>
@endsection
@section('navlink5')
<li
                class="cursor-pointer bg-purple-700 p-3 transition-all hover:scale-110 hover:bg-white hover:text-purple-700 lg:w-auto lg:rounded-md lg:bg-opacity-0"
            >
<a href="/gameCategories">Categorias de Jogos</a>
</li>
@endsection
@section('navlink6')
<li
                class="cursor-pointer bg-purple-700 p-3 transition-all hover:scale-110 hover:bg-white hover:text-purple-700 lg:w-auto lg:rounded-md lg:bg-opacity-0"
            >
<a href="/prodCategories">Categorias de Produtos</a>
</li>
@endsection
@section('devarea')
<a href="{{ route("home") }}">Voltar a loja</a>
@endsection
<!DOCTYPE html>
<html lang="pt-BR">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield("title")</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{asset('js/custom.js')}}"defer></script>
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        @vite("resources/css/app.css")
    </head>
    @extends('layouts.navbar')
    <body class="flex justify-center bg-purple-900">
        <img
            class="absolute h-screen w-full object-cover opacity-50"
            src="{{ asset("images/bg2.webp") }}"
            alt=""
        />
        <div class="bg-gradient-to-r shadow-xl min-h-screen z-20 from-purple-950 to-violet-900
             px-4 pt-20 text-white w-full md:w-3/4">
            @yield("content")
        </div>
    </body>
</html>
