<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    public $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'product_id' => 'integer'
    ];

    public static array $rules = [
        'user_id' => 'required|exists:users,id',
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|min:0|max:999999'
    ];

    
}
