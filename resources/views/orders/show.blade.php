@extends('template.admin')

@section('title', 'Pedido')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">
    Pedido Nº: {{ $order->id }}
</h1>
<h2 class=" leading-tigh py-2">
    Valor Total R$ {{ formatMoney($order->amount) }}
</h2>

<form action="{{ route('orders.index') }}" method="get" class="py-8">
    <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
        <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Foto
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Nome
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Tipo
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Preço
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Hora
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
          Data
          </th>

        </tr>
      </thead>
      <tbody>

    @foreach ($products as $product)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                @if ($product->image)
                    <img src="{{ url($product->image) }}" alt="{{ $product->name }}" class="h-24 w-full ">
                @else
                    {{ $product->name }}
                @endif
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->name }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->type }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">R$ {{ formatMoney($product->price) }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ date('H:i',strtotime( $order->created_at)) }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ date('d/m/Y', strtotime( $order->created_at)) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="py-4">

</div>
{{ $products->links() }}



@endsection