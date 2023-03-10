<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recentImageUploadModel extends Model
{
    use HasFactory;

    function rel_to_recentWork(){
        return $this->belongsTo(recentWorkModel::class, "recentWorkId");
    }
}
