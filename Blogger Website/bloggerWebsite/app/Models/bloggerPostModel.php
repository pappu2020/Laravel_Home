<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bloggerPostModel extends Model
{

    protected $guarded = ["id"];
    use HasFactory;
    use SoftDeletes;

    function rel_to_users(){
        return $this->belongsTo(User::class, "author_id");
    }
    
    function rel_to_category(){
        return $this->belongsTo(categoryModel::class, "category_id");
    }
    
    
}
