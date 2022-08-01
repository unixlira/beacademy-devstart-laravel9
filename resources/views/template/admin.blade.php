<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Curso Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-60 py-8">
        <nav class="bg-gray-100 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="/" class="flex items-center">
                    <img src="{{url('/logo/logo-ebook.png')}}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                </a>
                <div class="flex items-center md:order-2">
                    <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                        <img class="w-8 h-8 rounded-full" src="{{url(Auth::user()->image ?? '')}}" alt="{{ Auth::user()->name }}">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                        <div class="py-3 px-4">
                            @if(Auth::user())
                                <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                            @endif
                        </div>
                        <ul class="py-1" aria-labelledby="dropdown">
                            <div class=" px-4">
                                <span class="block text-sm text-gray-900 dark:text-white">Gerenciar</span>
                            

                            @if(Auth::user()->is_admin == 1)
                                <li>
                                    <div class="px-4">
                                        <a href="{{ route('users.index') }}">
                                            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                                                Usuários
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="px-4">
                                        <a href="{{ route('orders.index') }}">
                                            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                                                Pedidos
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="px-4">
                                        <a href="{{ route('products.index') }}">
                                            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                                                Produtos
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <span class="block text-sm text-gray-900 dark:text-white">Acessos</span>
                                <li>
                                    <div class="px-4">
                                        <a href="{{ route('home.index') }}">
                                            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                                                Site
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="px-4">
                                        <a href="{{ route('cart.index') }}">
                                            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                                                Carrinho
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="px-4">
                                        <a href="{{ route('home.orders') }}">
                                            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                                                Pedidos
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            @endif
                            </div>
                            <hr>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Sair') }}
                                    </x-responsive-nav-link>
                                </form>                
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</html>