<?php

namespace App\Http\Controllers;

use App\Models\addClassesCoursesModel;
use Illuminate\Http\Request;

class studentController extends Controller
{
    function studentAddForm(){
        $allclassList  = addClassesCoursesModel::all();
        return view("admin.student.studentAddForm",[
            'allclassList' => $allclassList, 
        ]);
    }
}
