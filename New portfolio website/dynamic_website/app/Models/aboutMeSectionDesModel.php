<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class aboutMeSectionDesModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ["id"];
    function rel_to_users(){
        return $this->belongsTo(User::class,"created_by");
    }
}
