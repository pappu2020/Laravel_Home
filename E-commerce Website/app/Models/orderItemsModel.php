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
    
    function rel_to_orderBills()
    {
        return $this->belongsTo(ordersBillModel::class, "order_id");
    }
    
    
    function rel_to_orderCustomer()
    {
        return $this->belongsTo(customerLoginModel::class, "customer_id");
    }
    
    function rel_to_Customer()
    {
        return $this->hasMany(customerLoginModel::class, "customer_id");
    }

    
}
