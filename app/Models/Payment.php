<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payments';

    public $fillable = [
        'order_id',
        'payment_date',
        'amount'
    ];

    protected $casts = [
        'order_id' => 'integer',
        'payment_date' => 'date',
        'amount' => 'float'
    ];

    public static array $rules = [
        'order_id' => 'required|exists:orders,id',
        'payment_date' => 'required|date',
        'amount' => 'required|numeric|min:0|max:9999999999.99'
    ];

    
}
