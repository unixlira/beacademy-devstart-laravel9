@extends('template.site')

@section('title', 'eBooks - Home')

@section('content')
<div class="container mx-auto px-60">
   <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
   <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
      <button
         type="button"
         data-bs-target="#carouselExampleIndicators"
         data-bs-slide-to="0"
         class="active"
         aria-current="true"
         aria-label="Slide 1"
      ></button>
      <button
         type="button"
         data-bs-target="#carouselExampleIndicators"
         data-bs-slide-to="1"
         aria-label="Slide 2"
      ></button>
      <button
         type="button"
         data-bs-target="#carouselExampleIndicators"
         data-bs-slide-to="2"
         aria-label="Slide 3"
      ></button>
   </div>
   <div class="carousel-inner relative w-full overflow-hidden">
      <div class="carousel-item active float-left w-full">
         <img
         src="{{url('/storage/slides/slide1.jpg')}}"
         class="block w-full"
         alt="Wild Landscape"
         />
      </div>
      <div class="carousel-item float-left w-full">
         <img
         src="{{url('/storage/slides/slide2.jpg')}}"
         class="block w-full"
         alt="Camera"
         />
      </div>
      <div class="carousel-item float-left w-full">
         <img
         src="{{url('/storage/slides/slide3.jpg')}}"
         class="block w-full"
         alt="Exotic Fruits"
         />
      </div>
   </div>
   <button
      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev"
   >
      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
   </button>
   <button
      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next"
   >
      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
   </button>
   </div>
</div>

<div class="container mx-auto px-60 py-8"> 
   <h1 class="font-mono text-4xl text-center">Escolha seu livro</h1>
</div>

<!-- List Products -->
<div class="container mx-auto px-60 py-8 grid grid-cols-3 gap-20"> 
   @foreach ($products as $product)
      <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
        <img class="object-cover rounded-tl-lg rounded-tr-lg"
            src="https://www.kindacode.com/wp-content/uploads/2022/06/computer-example.jpg" />
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
            <div class="flex justify-between items-center pt-3 pb-2">
                <a href="#"
                    class="px-4 py-2 bg-red-600 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                    Adicionar ao Carrinho</a>

                <a href="#" title="Add to Favorites"
                    class="text-2xl text-gray-300 hover:text-red-500 duration-300">&hearts;</a>
            </div>
        </div>
    </div>
   @endforeach

</div>
@endsection

