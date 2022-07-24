@extends('template.admin')

@section('title', 'Painel Admin')

@section('content')

<div class="container m-1 px-50 py-8 grid grid-cols-3 gap-20"> 

    <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
        <img class="m-auto object-cover rounded-tl-lg rounded-tr-lg"
            src="https://i.ibb.co/WgSCSN9/config.jpg" />
        <div class="px-5 py-3 space-y-2">

            <hr>
            <div class="flex justify-between items-center pt-3 pb-2">
                <a href="{{ route('products.index')}}"
                    class="m-auto px-4 py-2 bg-neutral-900 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                    Gerenciar Produtos</a>

            </div>
        </div>
    </div>

    <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
        <img class="m-auto object-cover rounded-tl-lg rounded-tr-lg"
            src="https://i.ibb.co/bbNCLff/config-users.jpg" />
        <div class="px-5 py-3 space-y-2">
            <hr>
            <div class="flex  justify-between items-center pt-3 pb-2">
                <a href="{{ route('users.index')}}"
                    class="m-auto px-4 py-2 bg-neutral-900 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                    Gerenciar Usuários</a>

            </div>
        </div>
    </div>

    <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
        <img class="m-auto object-cover rounded-tl-lg rounded-tr-lg"
            src="https://i.ibb.co/WgSCSN9/config.jpg" />
        <div class="px-5 py-3 space-y-2">

            <hr>
            <div class="flex mx-auto justify-between items-center pt-3 pb-2">
                <a href="{{ route('orders.index')}}"
                    class="m-auto px-4 py-2 bg-neutral-900 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                    Gerenciar Pedidos</a>

            </div>
        </div>
    </div>


</div>


@endsection