<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordersBillModel extends Model
{
    use HasFactory;

    function rel_to_customer(){
        return $this->belongsTo(customerLoginModel::class, "customer_id");
    } 
    
    function rel_to_product(){
        return $this->belongsTo(orderItemsModel::class, "order_id");
    }
}
