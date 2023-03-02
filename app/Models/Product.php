<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacy_id',
        'product_name',
        'description',
        'image',
        'price',
        'quantity',
        'mrp',
        'batch_number',
        'expiry_date',
        'category_id',
        'status_id',
        'manufacturer_id',
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

    public function category()
    {
        return $this->belongsTo(DrugCategory::class);
    }
}
