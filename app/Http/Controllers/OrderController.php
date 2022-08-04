<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{   
    protected $customer;
    protected $order;

    public function __construct(Customer $customer, Order $order)
    {   
        $this->customer = $customer;
        $this->model = $order;
    }

    public function index()
    {
        $orders = Order::paginate(10);
        return view("order.index", compact("orders"));
    }

    public function create()
    {   
        $customers = $this->customer->all();
        return view("order.create", compact("customers"));
    }

    public function store(Request $request)
    {

        $data = $request->all();
      
        $this->model->create($data);
        return redirect()->route("orders.index");
    }

    public function show($id)
    {
        if (!$order = Order::findOrFail($id)) {
            return redirect()->route("orders.index");
        }

        return view("order.show", compact("order"));
    }

    public function edit($id)
    { 
        if (!$order = $this->model->find($id)) {
            return redirect()->route("orders.index");
        }

        return view("order.edit", compact("order"));
    }

    public function destroy($id)
    {
        if (!$order = $this->model->find($id)) {
            return redirect()->route("orders.index");
        }

        $order->delete();

        return redirect()->route("orders.index");
    }

    public function update(Request $request, $id)
    {
        if (!$order = $this->model->find($id)) {
            return redirect()->route("orders.index");
        }

        $data = $request->only("customer_id", "device", "brand", "model", "serial_number", "accessories", "reported_problem", "service_description", "observations", "status", "price");

        $order->update($data);

        return redirect()->route("orders.index");
    }
}
