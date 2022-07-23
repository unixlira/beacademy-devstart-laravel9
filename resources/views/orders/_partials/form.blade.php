<div class="w-auto bg-white shadow-md rounded px-8 py-12">
    @csrf
    <input type="text" name="user_id" placeholder="Usuário ID:" value="{{ $order->user->name ?? old('user_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" name="product_id" placeholder="Produto ID:" value="{{ $order->product->name ?? old('product_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
</div>