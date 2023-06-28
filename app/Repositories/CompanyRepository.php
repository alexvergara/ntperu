<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\BaseRepository;

class CompanyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'address'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Company::class;
    }
}
