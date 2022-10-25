<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recentWorkNumberModel extends Model
{
    use HasFactory;

    function rel_to_users(){
        return $this->belongsTo(User::class, "created_by");
    }
}
