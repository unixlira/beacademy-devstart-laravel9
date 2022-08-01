<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrdersProducts;
use App\Models\OrdersUsers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    protected $order;
    protected $orderUser;
    protected $ordersProducts;

    public function __construct(Order $order, OrdersProducts $ordersProducts, OrdersUsers $ordersUsers)
    {
        
        $this->model = $order;
        $this->ordersUsers = $ordersUsers;
        $this->ordersProducts = $ordersProducts;
    }

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

        $order = $this->model->store($request);
        $this->ordersUsers->store($order);
        $this->ordersProducts->store($order);
        session()->push('order', $order);
        session()->forget('cart');

        return redirect()->route('checkout.index');
    }
}
