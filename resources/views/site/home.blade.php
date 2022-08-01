@extends('template.site')

@section('title', 'eBooks - Home')

@section('content')
@if(session()->has('addcart'))
   <div class="container mx-auto px-60 py-8" style="margin-top:-35px;"> 
      <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
         <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
         <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
               <span>{{ session()->get('addcart') }}</span> - 
               <a href="{{ route('cart.index')}}"><strong class="font-bold">Clique para acessar seu Carrinho</strong></a>
         </div>
         <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Fechar</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
      </div>
   </div>
@endif
@if(session()->has('download'))
   <div class="container mx-auto px-60 py-8" style="margin-top:-35px;"> 
      <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
         <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
         <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
               <span>{{ session()->get('download') }}</span>
         </div>
         <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Fechar</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
      </div>
   </div>
@endif

<div class="container mx-auto px-60" style="margin-top:-35px;">
   <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
         <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1">
         </button>
         <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2" >
         </button>
         <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2" >
         </button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden">
         <div class="carousel-item active float-left w-full">
            <img
            src="https://i.ibb.co/qj3sQ0b/slide1.jpg"
            class="block w-full"
            alt="Estude"/>
         </div>
         <div class="carousel-item float-left w-full">
            <img
            src="https://i.ibb.co/7j2pPzc/slide2.jpg"
            class="block w-full"
            alt="Estude Mais" />
         </div>
         <div class="carousel-item float-left w-full">
            <img
            src="https://i.ibb.co/ydJy37m/slide3.jpg"
            class="block w-full"
            alt="Continue Estudando..."/>
         </div>
      </div>
      <button
         class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
         type="button"
         data-bs-target="#carouselExampleIndicators"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button
         class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
         type="button"
         data-bs-target="#carouselExampleIndicators"
         data-bs-slide="next">
         <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>

<div class="container mx-auto px-60 py-8"> 
   <h1 class="font-mono text-4xl text-center py-8 bg-white">Livros e E-Books</h1>
   <hr>
</div>



<!-- List Products -->
<div class="container mx-auto px-60 py-8 grid grid-cols-3 gap-20"> 
   @if(isset($products))
      @foreach ($products as $product)
         <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
         <img class="object-cover rounded-tl-lg rounded-tr-lg"
               src="{{ url($product->image) }}" />
            <div class="px-5 py-3 space-y-2">
               <h3 class="text-lg">{{ $product->name }}</h3>
               <hr>
               <p class="space-x-2">
                  <span class="text-2xl font-semibold">R$ {{ formatMoney($product->price) }}</span>
               </p>
               <p class="space-x-2">
                  <span class="text-sm line-through text-gray-500">R$ {{ formatMoney(percentDiscount($product->price)) }}</span>
                  <span class="text-sm text-red-700">40% off</span>
               </p>

               <div class="px-4 py-2 bg-red-600 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                  <form action="{{ route('cart.store',['id' => $product->id ]) }}" method="POST">
                     @csrf
                     <input type="hidden" name="quatity" value="1">
                     <input type="hidden" name="name" value="{{ $product->name }}">
                     <input type="hidden" name="identity" value="{{ $product->id }}">
                     <input type="hidden" name="price" value="{{ $product->price }}">
                     <button type="submit">Adicionar ao Carrinho</button>
                  </form>
               </div>

            </div>
         </div>
      @endforeach
   @endif
</div>

<div class="container mx-auto px-60 py-8"> 
   {{ $products->links() }}
   <br>
   <hr>
</div>

<div class="container mx-auto px-60 py-8"> 
   <h1 class="font-mono text-4xl text-center py-8 bg-white">Artigos</h1>
</div>

<div class="container mx-auto px-60 py-8"> 
   <div class="grid grid-cols-2 gap-4">
      <div class="flex justify-left">
         <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://veja.abril.com.br/wp-content/uploads/2020/05/gettyimages-1038295900.jpg?quality=70&strip=info&resize=850,567" alt="" />
            <div class="p-6 flex flex-col justify-start">
               <h5 class="text-gray-900 text-xl font-medium mb-2">Venda de e-books cresce consolidando hábito da pandemia</h5>
               <p class="text-gray-700 text-base mb-4">
               Durante a pandemia, o mercado editorial apresentou um inesperado e significativo crescimento. 
               Com as pessoas passando mais tempo dentro de casa, o período antes dedicado ao deslocamento pôde 
               ser em outras atividades, dentre elas a leitura especialmente entre escritores aspirantes.
               </p>
               <p class="text-gray-600 text-xs">Por <b>Amanda Capuano</b> 20 ago 2021</p>
            </div>
         </div>
      </div>
      <!-- ... -->
      <div class="flex justify-rigth">
         <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://veja.abril.com.br/wp-content/uploads/2020/03/gettyimages-482186603-e1584475192316.jpg?quality=70&strip=info&w=300&h=200&crop=1" alt="" />
            <div class="p-6 flex flex-col justify-start">
               <h5 class="text-gray-900 text-xl font-medium mb-2">Livros autopublicados no Brasil batem 200 mil títulos na Amazon</h5>
               <p class="text-gray-700 text-base mb-4">
               Foi-se o tempo em que para publicar um livro era preciso bater de porta em porta com um original debaixo do braço, 
               torcendo para que alguma editora se interessasse pelo material. 
               Com o avanço dos e-books, a autopublicação emergiu como uma alternativa acessível e prática. 
               </p>
               <p class="text-gray-600 text-xs">Por <b>José Lira</b> 20 jun 2022</p>
            </div>
         </div>
      </div>
   </div>
   <br>
   <div class="grid grid-cols-2 gap-4">
      <div class="flex justify-left">
         <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://veja.abril.com.br/wp-content/uploads/2016/06/kindle-dx-ebook-reuters-300-original.jpeg?quality=70&strip=info&w=300&h=200&crop=1" alt="" />
            <div class="p-6 flex flex-col justify-start">
               <h5 class="text-gray-900 text-xl font-medium mb-2">Desempenho da venda de e-books será medido</h5>
               <p class="text-gray-700 text-base mb-4">
               Pouco se sabe sobre a situação dos livros digitais no Brasil. Editoras não divulgam os números de vendas, 
               e dizem apenas que elas representam 1%, às vezes 2% do faturamento. Tampouco interessa às livrarias revelar seu market share (participação no mercado). 
               Juntando uma informação aqui e outra ali, era possível entender um pouco do comportamento […]
               </p>
               <p class="text-gray-600 text-xs">Por <b>Redação</b> 11 mar 2022</p>
            </div>
         </div>
      </div>
      <!-- ... -->
      <div class="flex justify-rigth">
         <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://veja.abril.com.br/wp-content/uploads/2016/05/jeff-bezos-e-os-novos-kindle-original.jpeg?quality=70&strip=info&resize=850,567" alt="" />
            <div class="p-6 flex flex-col justify-start">
               <h5 class="text-gray-900 text-xl font-medium mb-2">Amazon vai lançar novo Kindle com capa recarregável</h5>
               <p class="text-gray-700 text-base mb-4">
               A Amazon vai lançar uma versão topo de linha do Kindle, de acordo com informações do Wall Street Journal. 
               A grande inovação virá na capa protetora, que também funcionará para recarregar e aumentar a vida útil do leitor de e-books. 
               E- Books e Kindle juntos para melhorar o futuro da leitura entre jovens e idosos.
               </p>
               <p class="text-gray-600 text-xs">Por <b>Willian Bonner</b> 20 jun 2021</p>
            </div>
         </div>
      </div>
   </div>
   <br>
   <hr>
</div>
@endsection




