@extends('template.admin')

@section('title', 'Produto')

@section('content')


<div class="flex justify-center">
  <h1 class="text-2xl font-semibold leading-tigh py-2">ID:  {{ $product->id }}</h1>
</div>

<div class="flex justify-center">
  <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
    <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ url($product->image) }}" alt="" />
    <div class="p-6 flex flex-col justify-start">
      <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $product->name }}</h5>
      <p class="text-gray-700 text-base mb-4">
      {{ $product->description }}
      </p>
      <p class="text-gray-600 text-xs">Identificação: {{ $product->id }}</p>
      <p class="text-gray-600 text-xs">Preço: R$ {{ formatMoney($product->price) }}</p>
    </div>
  </div>
</div>

<div class="flex justify-center">
  <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="py-12">
      @method('DELETE')
      @csrf
      <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" >Deletar</button>
  </form>
</div>


@endsection