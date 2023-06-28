<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = 'suppliers';

    public $fillable = [
        'name',
        'address'
    ];

    protected $casts = [
        'name' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|min:3|max:20',
        'address' => 'required|min:3|max:100'
    ];

    
}
