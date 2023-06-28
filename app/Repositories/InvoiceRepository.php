<?php

namespace App\Repositories;

use App\Models\Invoice;
use App\Repositories\BaseRepository;

class InvoiceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'order_id',
        'due_date',
        'amount'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Invoice::class;
    }
}
