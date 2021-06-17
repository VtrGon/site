<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image'
    ];

    /** 
     * ao retornar esses dados eles sao convertidos em
     * instancias do Carbon (para trabalharmos com datas)
     */
    protected $dates = [
        'deleted_at'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
