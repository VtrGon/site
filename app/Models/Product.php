<?php

namespace App\Models;

use App\Http\Controllers\Site\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'exclusive'
    ];

    protected $date = [
        'deleted_at'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
