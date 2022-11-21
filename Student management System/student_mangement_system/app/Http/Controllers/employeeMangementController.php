<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeMangementController extends Controller
{
    function employeeMangementPage(){
        return view("admin.employeeMangementPage");
    }
}
