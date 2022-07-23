<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function index()
    {
        return view('site.cart');
    }

    public function store($id)
    {
        $product = Product::find($id);

        $cart = [
            'id'       => $product->id,
            'name'     => $product->name,
            'price'    => $product->price,
            'type'     => $product->type,
            'image'    => $product->image,
            'quantity' => 1
        ];

        session()->push('cart', $cart);

        $cart = session()->get('cart');

        return redirect()->back()->with('addcart', 'Livro adicionado com sucesso!');
    }

    public function destroy($key)
    {
        session()->forget('cart.'.$key);

        $cart = session()->get('cart');

        if(empty($cart))
            return redirect()->route('home.index');

        return redirect()->back()->with('removecart', 'Livro excluido com sucesso!');
    }

    public function create(Request $request)
    {
        //dd($request);

        return view('site.checkout');
    }
}
