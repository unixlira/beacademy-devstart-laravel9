<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'price',
        'description',
        'image',

    ];


    public function getProducts(string $search = null)
    {
        $products = $this->where(function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'LIKE', "%{$search}%");
            }
        })->paginate(5);

        return $products;
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
