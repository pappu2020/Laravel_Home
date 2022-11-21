<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    function teacherProfilePage(){
        return view("admin.teachers.teacherProfilePage");
    }
}
