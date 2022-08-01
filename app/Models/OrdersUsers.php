<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrdersUsers extends Model
{
    use HasFactory;

    protected $table = 'orders_users';

    protected $fillable = [
        'order_id',
        'user_id'
    ];

    public $timestamps = false;

    public function store($data)
    {        
        $orderUser = new OrdersUsers();
        $orderUser->user_id = Auth::id();
        $orderUser->order_id = $data->id;
        $orderUser->save();

    }
}
