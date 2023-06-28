<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $table = 'notifications';

    public $fillable = [
        'message',
        'user_id',
        'read'
    ];

    protected $casts = [
        'message' => 'string',
        'read' => 'boolean'
    ];

    public static array $rules = [
        'message' => 'required|min:3|max:255',
        'user_id' => 'required|exists:users,id'
    ];

    
}
