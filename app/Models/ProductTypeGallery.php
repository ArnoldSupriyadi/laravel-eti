<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTypeGallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_type_galleries';

    protected $fillable = [
        'type_id',
        'name',
        'description',
        'nama',
        'deskripsi',
        'price',
        'image'
    ];

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }
}
