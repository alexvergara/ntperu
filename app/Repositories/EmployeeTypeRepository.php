<?php

namespace App\Repositories;

use App\Models\EmployeeType;
use App\Repositories\BaseRepository;

class EmployeeTypeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return EmployeeType::class;
    }
}
