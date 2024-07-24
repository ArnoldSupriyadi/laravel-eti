<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_types';

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'nama',
        'deskripsi',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function productTypeGalleries()
    {
        return $this->hasMany(ProductTypeGallery::class, 'type_id', 'id');
    }
}
