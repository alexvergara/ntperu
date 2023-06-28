<?php

namespace App\Repositories;

use App\Models\PurchaseOrder;
use App\Repositories\BaseRepository;

class PurchaseOrderRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'supplier_id',
        'product_id',
        'quantity'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return purchaseOrder::class;
    }
}
