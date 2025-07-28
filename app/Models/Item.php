<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category() {
    return $this->belongsTo(Category::class);
}

public function supplier() {
    return $this->belongsTo(Supplier::class);
}

public function brand() {
    return $this->belongsTo(Brand::class);
}


protected $fillable = [
    'sku',
    'name',
    'description',
    'category_id',
    'supplier_id',
    'brand_id',
    'price',
    'stock',
    'weight',
    'width',
    'height',
    'length',
    'vat'
];
}

