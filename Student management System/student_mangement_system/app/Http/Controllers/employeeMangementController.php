<?php

namespace App\Http\Controllers;

use App\Models\teacherLogin;
use Illuminate\Http\Request;

class employeeMangementController extends Controller
{
    function employeeMangementPage(){
       
        return view("admin.employeeMangementPage");
    }


    function TeacherListPage(){
        $allTeacherInfo = teacherLogin::all();
        return view("admin.teachers.teacherListPage", [
            'allTeacherInfo' => $allTeacherInfo,
        ]);
    }
}
