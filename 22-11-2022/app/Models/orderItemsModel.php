<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderItemsModel extends Model
{
    use HasFactory;
    function rel_to_product()
    {
        return $this->belongsTo(productModel::class, "product_id");
    }
    
    function rel_to_color()
    {
        return $this->belongsTo(addColorModel::class, "color");
    } 
    
    
    function rel_to_size()
    {
        return $this->belongsTo(addSizeModel::class, "size");
    }
}
