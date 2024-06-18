<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoreValue extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'core_values';

    protected $fillable = [
        'name',
        'description',
        'nama',
        'deskripsi'
    ];
}
