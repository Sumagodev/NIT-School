<?php

namespace App\Imports;

use App\Models\ProductDetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\OnFailure;
use Maatwebsite\Excel\Validators\Failure;

class ProductsImport implements ToModel, WithHeadingRow, OnFailure
{
    public $successCount = 0;
    public $failureCount = 0;

    public function model(array $row)
    {
        try {
            return new ProductDetails([
                'product_id'      => $row['product_id'],
                'product_name'    => $row['product_name'],
                'product_weight'  => $row['product_weight'],
                'category'        => $row['category'],
                'sap_code'        => $row['sap_code'],
                'gt_code'         => $row['gt_code'],
                'trade'           => $row['trade'],
            ]);
            $this->successCount++;
        } catch (\Exception $e) {
            $this->failureCount++;
        }
    }

    public function onFailure(Failure ...$failures)
    {
        $this->failureCount += count($failures);
    }
}
