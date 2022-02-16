<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, Filterable;

    protected $table = 'products';
    protected $guarded = false;

    public function culture()
    {
        return $this->belongsTo(Culture::class, 'culture_id', 'id');
    }
}
