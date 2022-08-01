@extends('template.site')

@section('title', 'eBooks - Carrinho')

@section('content')
  @if(!is_null(session()->get('cart')))
    <div class="container mx-auto px-60" style="margin-top:-35px;">
        <div class="flex shadow-md my-10">
          <div class="w-3/4 bg-white px-10 py-10">
            <div class="flex justify-between border-b pb-8">
              <h1 class="font-semibold text-2xl">Meu carrinho</h1>
              <h2 class="font-semibold text-2xl">Items {{count(session()->get('cart'))}}</h2>
            </div>
            <div class="flex mt-10 mb-5">
              <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalhes do Produto</h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center"></h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center"></h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Preço</h3>
            </div>

            @foreach (session()->get('cart') as $key => $product)
              <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-2/5"> <!-- product -->
                  <div class="w-20">
                    <img class="h-24" src="{{ url($product['image']) }}" alt="">
                  </div>
                  <div class="flex flex-col justify-between ml-4 flex-grow">
                    <span class="font-bold text-sm">{{$product['name']}}</span>
                    <span class="text-red-500 text-xs">{{$product['type']}}</span>
                    <div >
                      <form action="{{ route('cart.destroy', ['key' => $key]) }}" method="POST">
                          @csrf
                          <button type="submit" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Excluir</button>
                      </form>
                    </div>
                  </div>
                </div>

                <span class="text-center w-1/5 font-semibold text-sm"></span>
                <span class="text-center w-1/5 font-semibold text-sm"></span>
                <span class="text-center w-1/5 font-semibold text-sm">R$ {{ formatMoney($product['price'])}}</span>
              </div>
            @endforeach

            <a href="/" class="flex font-semibold text-green-600 text-sm mt-10">
              <svg class="fill-current mr-2 text-green-600 w-4" viewBox="0 0 448 512">
                <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
              Continuar Comprando
            </a>
          </div>

          <div id="summary" class="w-1/4 px-8 py-10">
            <h1 class="font-semibold text-2xl border-b pb-8">Resumo</h1>
            <div class="flex justify-between mt-10 mb-5">
              <div>
                <label class="font-medium inline-block mb-3 text-sm uppercase">Produtos</label>
                <input type="text" id="promo" placeholder="R$ {{ formatMoney(sumPrices(session()->get('cart'))) }}" class="p-2 text-sm w-full" disabled>
              </div>

            </div>
            <div>
              <label class="font-medium inline-block mb-3 text-sm uppercase">Taxa</label>
              <input type="text" id="promo" placeholder="R$ 12,00" class="p-2 text-sm w-full" disabled>
            </div>

            <div class="border-t mt-8">
              <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                <span>Total</span>
                <span>R$ {{ formatMoney(sumPrices(session()->get('cart'))+12) }}</span>
              </div>

              <form action="{{ route('order.create') }}" method="POST" class="px-4 py-2 bg-green-600  text-center text-sm text-white rounded duration-300">
                @csrf
                <input type="hidden" name="amount" value="{{ sumPrices(session()->get('cart')) }}">
                <button type="submit" class="">Comprar</button>
              </form>
            </div>
          </div>

        </div>
      </div>
  @else
    <div class="container mx-auto px-60 py-8" style="margin-top:-60px;"> 
      <h1 class="font-mono text-4xl text-center py-8 bg-white">Seu Carrinho está vazio.

      </h1>    
      <div class="container mx-auto px-60 py-8 bg-white" style="margin-top:-35px; ">
        <img src="https://c.tenor.com/lx2WSGRk8bcAAAAC/pulp-fiction-john-travolta.gif" alt="">
      </div>
      <div class="container mx-auto px-60 py-8 bg-white" style="margin-top:-35px; ">
        <a href="/" class="flex justify-center bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Voltar</a>
      </div>
    </div>

  @endif
@endsection
