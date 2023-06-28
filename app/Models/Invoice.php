<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $table = 'invoices';

    public $fillable = [
        'order_id',
        'due_date',
        'amount'
    ];

    protected $casts = [
        'order_id' => 'integer',
        'due_date' => 'date',
        'amount' => 'float'
    ];

    public static array $rules = [
        'order_id' => 'required|exists:orders,id',
        'due_date' => 'required|date',
        'amount' => 'required|numeric|min:0|max:9999999999.99'
    ];

    
}
