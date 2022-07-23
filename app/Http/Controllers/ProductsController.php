<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function index(Request $request)
    {
        $products = $this->model->getProducts(
                    $request->search ?? ''
                );

        return view('products.index', compact('products'));
    }

    public function show($id)
    {

        $product = Product::find($id);

        if($product){
            return view('products.show', compact('product'));
        }else{
            throw new Exception('Usuário não encontrado');
        }

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if ($request->image) {
            $data['image'] = $request->image->store('products');
        }

        $this->model->create($data);

        return redirect()->route('products.index')->with('create', 'Produto Cadastrado com Sucesso!');

    }

    public function edit($id)
    {
        if (!$product = $this->model->find($id))
            return redirect()->route('products.index');

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        if (!$product = $this->model->find($id))
            return redirect()->route('products.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        if ($request->image) {
            if ($product->image && Storage::exists($product->image)) {
                Storage::delete($product->image);
            }

            $data['image'] = $request->image->store('products');
        }

        $data['is_admin'] = $request->admin ? 1 : 0;

        $product->update($data);

        $request->session()->flash('update', 'Produto atualizado com Sucesso!');

        return redirect()->route('products.index');
    }

    public function destroy(Request $request, $id)
    {
        if (!$product = $this->model->find($id))
            return redirect()->route('products.index');

        $product->delete();

        $request->session()->flash('destroy', 'Produto excluido com Sucesso!');

        return redirect()->route('products.index');
    }
}
