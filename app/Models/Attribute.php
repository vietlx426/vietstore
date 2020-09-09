<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Attribute extends Model
{
    protected $table = 'attributes';
    protected $guarded = [''];
    protected $type = [
        1=>"Kích thước màn hình",
        2=>"Tình trạng"
    ];
    public function getType(){
        return Arr::get($this->type,$this->atb_type, "[N\A]");
    }
    public function category(){
        return $this->belongsTo(Category::class,'atb_category_id');
    }
}
