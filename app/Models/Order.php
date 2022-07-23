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


    public function getOrders(string $search = null)
    {

        $orders = $this->where(function ($query) use ($search) {
            if ($search) {
                $query->where('user_id', $search);

            }
        })->paginate(5);

        return $orders;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
}
