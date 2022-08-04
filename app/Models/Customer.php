<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "nickname",
        "cpf",
        "email",
        "phone",
        "birthday",
        "address",
        "district",
        "city",
        "state",
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}
