<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GameRail</title>
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        @vite("resources/css/app.css")
    </head>

    <body
        class="h-screen w-full bg-gradient-to-r from-purple-950 to-fuchsia-600"
    >
        <header
            class="header fixed top-0 left-0 w-screen items-center justify-between bg-purple-600 py-4 lg:py-3 text-white drop-shadow-md lg:flex lg:px-12"
        >
        <div class="px-4 lg:px-0">
            <a
                class="items-center font-black transition-all hover:scale-105"
                href=""
            >
                <img
                    class="w-48"
                    src="{{asset("images/grTitle.png")}}"
                    alt="logo"
                />
            </a>
</div>
            <ul class="menu hidden text-center text-base font-semibold lg:flex lg:gap-4">
                <li
                    class="mt-3 cursor-pointer rounded-xl p-3 transition-all hover:bg-white hover:text-purple-700 lg:mt-0 lg:w-auto"
                >
                    Início
                </li>

                <li
                    class="cursor-pointer rounded-xl p-3 transition-all hover:bg-white hover:text-purple-700 lg:w-auto"
                >
                    Categorias
                </li>

                <li
                    class="cursor-pointer rounded-xl p-3 transition-all hover:bg-white hover:text-purple-700 lg:w-auto"
                >
                    Explorar
                </li>

                <li
                    class="cursor-pointer rounded-xl p-3 transition-all hover:bg-white hover:text-purple-700 lg:w-auto"
                >
                    Contato
                </li>
            </ul>
            <div class="search hidden items-center lg:flex">
                <div class="relative flex items-center">
                    <i
                        class="bx bx-search absolute left-3 text-2xl text-white"
                    ></i>
                    <input
                        class="rounded-xl border-none bg-purple-800 px-8 pl-10 text-white placeholder-white ring-0 transition-all focus:border-fuchsia-500 focus:bg-purple-800 focus:text-white focus:ring-2 focus:ring-white"
                        placeholder="Buscar Jogos..."
                        type="text"
                    />
                </div>
            </div>
            <div class="absolute right-8 top-4 flex flex-row gap-2 lg:static">
                <a
                    class="group flex w-24 cursor-pointer items-center gap-2 rounded-xl p-2 font-semibold transition-all hover:bg-white hover:text-purple-700"
                    href=""
                >
                    <div
                        class="w-8 overflow-hidden rounded-2xl ring-1 ring-white ring-opacity-30 transition-all group-hover:ring-2 group-hover:ring-purple-700"
                    >
                        <img
                            class="h-full w-full object-cover"
                            src="{{ asset("images/defIcon.png")}}"
                            alt="user"
                        />
                    </div>
                    Entrar
                </a>

                <button
                    onclick="showMenu()"
                    class="menuBtn bx bx-menu cursor-pointer items-center text-4xl mt-0.5 transition-all hover:scale-105 lg:hidden"
                ></button>
            </div>
        </header>
        <script>
            function showMenu() {
                let menu = document.querySelector('.menu');
                let menuBtn = document.querySelector('.menuBtn');
                let search = document.querySelector('.search');
                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                    search.classList.remove('hidden');
                    search.classList.add('py-3', 'flex', 'justify-center');
                    menuBtn.classList.remove('bx-menu');
                    menuBtn.classList.add('bx-x');
                } else {
                    menu.classList.add('hidden');
                    search.classList.add('hidden');
                    search.classList.remove('py-3', 'flex', 'justify-center');
                    menuBtn.classList.remove('bx-x');
                    menuBtn.classList.add('bx-menu');
                    menuBtn.classList.remove('bx-x');
                }
            }
        </script>
        <div class="ml-2 font-bold text-white mt-20 h-full max-w-full">
            1
        </div>
        <div class="ml-2 font-bold text-white mt-20 h-full max-w-full">
            2
        </div>
        <div class="ml-2 font-bold text-white mt-20 h-full max-w-full">
            3
    </body>
</html>
