<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    function rel_to_users(){
        return $this->belongsTo(User::class, "added_by");
    }
}
