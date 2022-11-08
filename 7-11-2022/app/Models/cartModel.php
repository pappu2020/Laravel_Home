<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    function rel_to_product(){
        return $this->belongsTo(productModel::class, "product_id");
    }
    
    function rel_to_color(){
        return $this->belongsTo(addColorModel::class, "color_id");
    }
    
    
    function rel_to_size(){
        return $this->belongsTo(addSizeModel::class, "size_id");
    }
}
