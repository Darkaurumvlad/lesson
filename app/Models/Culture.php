<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $table = 'cultures';
    protected $guarded = false;

    public function products()
    {
        return $this->hasMany(Product::class, 'culture_id', 'id');
    }
}
