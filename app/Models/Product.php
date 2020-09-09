<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded= '';
    public function get_attributes(){
        return $this->hasMany(ProductAttribute::class,'pa_product_id');
    }
}
