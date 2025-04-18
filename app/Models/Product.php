<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class Product extends Model
{
    protected $fillable =['name','price','category_id'];
    
    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }
}
