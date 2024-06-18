<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategoryGallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_category_galleries';

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'nama',
        'deskripsi',
        'price',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
