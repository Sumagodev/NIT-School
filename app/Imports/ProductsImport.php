<?php

namespace App\Imports;

use App\Models\ProductDetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProductDetails([
            'product_id'      => $row['product_id'],
            'product_name'    => $row['product_name'],
            'product_weight'  => $row['product_weight'],
            'category'        => $row['category'],
            'sap_code'        => $row['sap_code'],
            'gt_code'         => $row['gt_code'],
            'trade'           => $row['trade'],
        ]);
    }
}
