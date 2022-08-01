<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrdersProducts;
use App\Models\OrdersUsers;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrdersController extends Controller
{
    protected $order;
    protected $order_user;
    protected $order_product;

    public function __construct(Order $order, OrdersProducts $order_product, OrdersUsers $orders_users)
    {
        $this->model = $order;
        $this->order_user = $orders_users;
        $this->order_product = $order_product;
    }

    public function index(Request $request)
    {

        $orders = $this->model->getOrders(
                    $request->search ?? ''
                );

        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {

        $order = Order::with('products')->find($id);
        $products = $order->products()->paginate(6);

        if($products){
            return view('orders.show', compact('order', 'products'));
        }else{
            throw new Exception('Pedido não encontrado');
        }

    }

    public function create()
    {
        $users = User::all();
        
        $products = Product::all();

        return view('orders.create', compact('users','products'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $order = $this->model->create($data);

        if($order){
            $data_product = [
                'order_id' => $order->id,
                'product_id' => $order->product_id,
            ];

            $this->order_product->create($data_product);

            $data_user = [
                'order_id' => $order->id,
                'user_id' => $order->user_id,
            ];

            $this->order_user->create($data_user);

        }

        return redirect()->route('orders.index')->with('create', 'Pedido Cadastrado com Sucesso!');

    }

    public function edit($id)
    {
        if (!$order = $this->model->with('products')->find($id))
            return redirect()->route('orders.index');


        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        if (!$order = $this->model->find($id))
            return redirect()->route('orders.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        if ($request->image) {
            if ($order->image && Storage::exists($order->image)) {
                Storage::delete($order->image);
            }

            $data['image'] = $request->image->store('orders');
        }

        $data['is_admin'] = $request->admin ? 1 : 0;

        $order->update($data);

        $request->session()->flash('update', 'Pedido atualizado com Sucesso!');

        return redirect()->route('orders.index');
    }

    public function destroy(Request $request, $id)
    {
        if (!$order = $this->model->find($id))
            return redirect()->route('orders.index');

        $order->delete();

        $request->session()->flash('destroy', 'Pedido excluido com Sucesso!');

        return redirect()->route('orders.index');
    }
}
