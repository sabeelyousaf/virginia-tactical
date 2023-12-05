<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsToMany(Category::class,'product_category');
    }
    public function subcategory()
{
    return $this->belongsTo(Subcategory::class);
}
    public function brands(){
        return $this->belongsToMany(Brand::class,'product_brands');
    }
    public function images(){
        return $this->hasMany(ProductImage::class);
    }
}
