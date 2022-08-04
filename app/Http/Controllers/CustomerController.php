<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{   
    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }

    public function index()
    {
        $customers = Customer::paginate(5);

        return view("customer.index", compact("customers"));
    }

    public function show($id)
    {   
        if (!$customer = Customer::findOrFail($id)) {
            return redirect()->route("customers.index");
        }

        return view("customer.show", compact("customer"));
    }

    public function create()
    {
        return view("customer.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->model->create($data);

        return redirect()->route("customers.index");
    }

    public function edit($id)
    { 
        if (!$customer = $this->model->find($id)) {
            return redirect()->route("customers.index");
        }

        return view("customer.edit", compact("customer"));
    }

    public function update(Request $request, $id)
    {
        if (!$customer = $this->model->find($id)) {
            return redirect()->route("customers.index");
        }

        $data = $request->only("name", "nickname", "cpf", "email", "phone", "birthday", "address", "district", "city", "state");

        $customer->update($data);

        return redirect()->route("customers.index");
    }

    public function destroy($id)
    {
        if (!$customer = $this->model->find($id)) {
            return redirect()->route("customers.index");
        }

        $customer->delete();

        return redirect()->route("customers.index");
    }

}
