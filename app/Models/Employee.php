<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';

    public $fillable = [
        'name',
        'companyId'
    ];

    protected $casts = [
        'name' => 'string',
        'companyId' => 'integer'
    ];

    public static array $rules = [
        'name' => 'required|min:3|max:20',
        'companyId' => 'required|exists:companies,id'
    ];

    
}
