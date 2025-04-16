
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield("title")</title>
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
        <div class="bg-gradient-to-r shadow-xl min-h-screen z-20 from-purple-950 to-violet-800
             px-4 pt-20 text-white w-full md:w-3/4">
            @yield("content")
        </div>
    </body>
</html>
