<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    public $table = 'purchase_orders';

    public $fillable = [
        'supplier_id',
        'product_id',
        'quantity'
    ];

    protected $casts = [
        'supplier_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer'
    ];

    public static array $rules = [
        'supplier_id' => 'required|exists:suppliers,id',
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|numeric|min:0|max:999999'
    ];

    
}
