<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderUser extends Model
{
    use HasFactory;

    protected $table = 'order_user';

    protected $fillable = [
        'order_id',
        'user_id'
    ];

    public $timestamps = false;

    public function store($data)
    {        
        $orderUser = new OrderUser();
        $orderUser->user_id = Auth::id();
        $orderUser->order_id = $data->id;
        $orderUser->save();

    }
}
