<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "customer_id",
        "device",
        "brand",
        "model",
        "serial_number",
        "accessories",
        "reported_problem",
        "service_description",
        "observations",
        "status",
        "price",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
