@extends('template.admin')

@section('title', 'Pedido')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Pedido Nº: {{ $order->id }}</h1>


<!-- List Products -->
<div class="container mx-auto px-60 py-8 grid grid-cols-3 gap-20"> 
   @foreach ($order->products as $product)
      <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
            <div class="py-5 flex justify-center ">
              <img class=" object-cover rounded-tl-lg rounded-tr-lg"
              src="{{ url("storage/{$product->image}") }}" />
            </div>
        
        <div class="px-5 py-3 space-y-2">
            <div class="flex justify-center">
              <h3 class="text-lg">{{ $product->name }}</h3>
            </div>

            <hr>
            <div class="flex justify-center">
              <p class="space-x-2">
                  <span class="text-2xl font-semibold">R$ {{ formatMoney($product->price) }}</span>
              </p>
            </div>
            <div class="flex justify-center">
              <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="py-12">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-amber-600 text-center text-sm text-white rounded duration-300" >Deletar</button>
              </form>
            </div>
        </div>
    </div>
    
   @endforeach

</div>



@endsection