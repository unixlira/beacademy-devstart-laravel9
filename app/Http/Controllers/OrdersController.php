<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrdersController extends Controller
{
    public function __construct(Order $order)
    {
        $this->model = $order;
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

        dd($order);

        if($order){
            return view('orders.show', compact('order'));
        }else{
            throw new Exception('Usuário não encontrado');
        }

    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if ($request->image) {
            $data['image'] = $request->image->store('orders');
        }

        $this->model->create($data);

        return redirect()->route('orders.index')->with('create', 'Pedido Cadastrado com Sucesso!');

    }

    public function edit($id)
    {
        if (!$order = $this->model->find($id))
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
