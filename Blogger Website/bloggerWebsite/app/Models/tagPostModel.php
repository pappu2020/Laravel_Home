<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagPostModel extends Model
{
    use HasFactory;

    function rel_to_tags()
    {
        return $this->belongsTo(tagModel::class, "tag_id");
    }
    
}
