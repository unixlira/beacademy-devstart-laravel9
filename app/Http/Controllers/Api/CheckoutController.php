<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if (!$order = session()->get('order'))
            return view('site.checkout');
            
        return view('site.checkout',compact('order'));
    }

    public function create(Request $request)
    {
        
        $order = Order::find($request->order_id);


        return view('site.checkout', compact('order'));
    }
}
