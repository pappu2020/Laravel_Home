<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generalUserCommentModel extends Model
{
    use HasFactory;
    // protected $guarded = ["id"];

    function rel_to_genUsers(){
        return $this->belongsTo(generalUserModel::class, "general_user_id");
    }
    
    
    function rel_to_replies(){
        return $this->hasMany(generalUserCommentModel::class, 'parent_id', 'id');
    }
    
}
