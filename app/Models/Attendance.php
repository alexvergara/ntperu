<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $table = 'attendances';

    public $fillable = [
        'employee_id',
        'clock_in',
        'clock_out'
    ];

    protected $casts = [
        'employee_id' => 'integer',
        'clock_in' => 'date',
        'clock_out' => 'date'
    ];

    public static array $rules = [
        'employee_id' => 'required|exists:employees,id',
        'clock_in' => 'required|date',
        'clock_out' => 'date'
    ];

    
}
