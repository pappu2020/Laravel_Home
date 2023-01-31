<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagModel extends Model
{
    use HasFactory;
    
    
    protected $guarded = ["id"];


    function rel_to_users(){
        return $this->belongsTo(User::class, "created_by");
    }
    
}
