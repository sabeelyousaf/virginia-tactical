<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
