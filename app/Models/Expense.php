<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $table = 'expenses';

    public $fillable = [
        'description',
        'amount'
    ];

    protected $casts = [
        'description' => 'string',
        'amount' => 'float'
    ];

    public static array $rules = [
        'description' => 'required|min:3|max:50',
        'amount' => 'required|numeric|min:0|max:9999999999.99'
    ];

    
}
