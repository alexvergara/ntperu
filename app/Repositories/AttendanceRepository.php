<?php

namespace App\Repositories;

use App\Models\Attendance;
use App\Repositories\BaseRepository;

class AttendanceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'employee_id',
        'clock_in',
        'clock_out'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Attendance::class;
    }
}
