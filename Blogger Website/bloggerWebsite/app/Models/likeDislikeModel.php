<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likeDislikeModel extends Model
{
    protected $guarded = ["id"];
    function rel_to_post(){
        return $this->hasMany(bloggerPostModel::class, "post_id");
    }
    use HasFactory;
}
