<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->getProducts();

        return view('site.home', compact('products'));
    }

    public function home()
    {
        $products = $this->product->getProducts();

        return view('site.home', compact('products'));
    }

    public function cart()
    {
        $products = $this->product->getProducts();

        return view('site.cart', compact('products'));
    }

    public function addCart(Request $request)
    {
        $products = $request->name;
        session()->put('products', $products);
        return redirect()->back();
    }
}
