<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'name',
        'price',
        'quantity'
    ];

    protected $casts = [
        'name' => 'string',
        'price' => 'float',
        'quantity' => 'integer'
    ];

    public static array $rules = [
        'name' => 'required|min:3|max:30',
        'price' => 'required|numeric|min:0|max:9999999.99',
        'quantity' => 'required|numeric|min:0|max:999999'
    ];

    
}
