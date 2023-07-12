<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImport extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacy_id',
        'product_name',
        'description',
        'price',
        'quantity',
        'mrp',
        'batch_number',
        'expiry_date',
        'status_id',
        'slug'
    ];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }

    public function pharmacy()
    {
        return $this->hasMany(Pharmacy::class);
    }
}
