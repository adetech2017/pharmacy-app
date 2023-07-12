<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\ProductImport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class ProductsImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $pharmacy_id = Auth::guard('pharmacy')->user()->id;

        return new ProductImport([
            'pharmacy_id'     => $pharmacy_id,
            'product_name'    => $row['product_name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'mrp' => $row['mrp'],
            'batch_number' => $row['batch_number'],
            'expiry_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['expiry_date']),
            'slug' => Str::slug($row['product_name'], '-'),

        ]);
    }
}
