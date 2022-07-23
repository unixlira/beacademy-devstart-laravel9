<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{
    use HasFactory;

    protected $table = 'order_user';

    protected $fillable = [
        'order_id',
        'user_id'
    ];

    public $timestamps = false;
}
