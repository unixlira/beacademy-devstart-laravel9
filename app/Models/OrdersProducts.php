<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersProducts extends Model
{
    use HasFactory;

    protected $table = 'orders_products';

    protected $fillable = [
        'order_id',
        'product_id'
    ];

    public $timestamps = false;

    public function store($order)
    {
        if (!$products = session()->get('cart'))
            return redirect()->route('products.index');

        foreach ($products as $product) {
            $ordersProducts = new OrdersProducts();
            $ordersProducts->order_id = $order->id;
            $ordersProducts->product_id = $product['id'];
            $ordersProducts->save();
        }
    }
}
