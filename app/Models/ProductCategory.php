<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_categories';

    protected $fillable = [
        'product_id',
        'name',
        'description',
        'nama',
        'deskripsi',
        'price',
        'image'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function productTypes()
    {
        return $this->hasMany(ProductType::class, 'category_id', 'id');
    }

    public function productCategoryGalleries()
    {
        return $this->hasMany(ProductCategoryGallery::class, 'category_id', 'id');
    }
}
