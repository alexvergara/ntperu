<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = 'messages';

    public $fillable = [
        'from_user',
        'to_user',
        'content'
    ];

    protected $casts = [
        'from_user' => 'integer',
        'to_user' => 'integer',
        'content' => 'string'
    ];

    public static array $rules = [
        'from_user' => 'required|exists:users,id',
        'to_user' => 'required|exists:users,id',
        'content' => 'required|min:3|max:500'
    ];

    
}
