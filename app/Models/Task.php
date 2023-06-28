<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'tasks';

    public $fillable = [
        'name',
        'description',
        'assigned_to'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'assigned_to' => 'integer'
    ];

    public static array $rules = [
        'name' => 'required|min:3|max:30',
        'description' => 'required|min:3|max:500',
        'assigned_to' => 'required|exists:users,id'
    ];

    
}
