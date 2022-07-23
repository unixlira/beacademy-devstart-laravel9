<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'user_id',
        'product_id'

    ];

    protected $attributes = [
        'quantity' => '1'
     ];


    public function getOrders(string $search = null)
    {

        $orders = $this->where(function ($query) use ($search) {
            if ($search) {
                $user = User::where('name', 'LIKE', "%{$search}%")->first();
                $query->where('user_id', $user->id);

            }
        })->paginate(6);

        return $orders;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
}
