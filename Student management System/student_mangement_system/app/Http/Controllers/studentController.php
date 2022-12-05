<?php

namespace App\Http\Controllers;

use App\Models\addClassesCoursesModel;
use App\Models\addClassModel;
use App\Models\addSubjectModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class studentController extends Controller
{



    function addClassesPage()
    {
        $allclassList  = addClassModel::all();
        return view("admin.addClassesPage", [
            'allclassList' => $allclassList,
        ]);
    }

    function studentAddForm()
    {
        $allclassList  = addClassModel::all();
        return view("admin.student.studentAddForm", [
            'allclassList' => $allclassList,
        ]);
    }


    function classInsert(Request $req)
    {
        $req->validate([
            'class' => 'required',
        ], [
            'class.required' => 'Please,Enter the class',
        ]);



        addClassModel::insert([
            'className' => $req->class,
            'created_at' => Carbon::now(),
        ]);


        return back()->with("insertClassSuccess", "Insert Success");
    }


    function subjectInsert(Request $req)
    {
        $req->validate([
            'classNameForAddSubject' => 'required',
            'course' => 'required',
            'courseFees' => 'required',
        ], [
            'classNameForAddSubject.required' => 'Please,Enter the class',
            'course.required' => 'Please,Enter the Course',
            'courseFees.required' => 'Please,Enter the Course Fess',
        ]);



        addSubjectModel::insert([
            'className' => $req->classNameForAddSubject,
            'subjectName' => $req->course,
            'courseFess' => $req->courseFees,
            'created_at' => Carbon::now(),
        ]);


        return back()->with("insertSubSuccess", "Insert Success");
    }



    function allClassInfo(Request $req)
    {

        $option = '<option selected>===Select the Course===</option>';

        $courseInfo  = addSubjectModel::where("className", $req->className)->get();

        foreach ($courseInfo as $course) {
            $option .= '<option value="' . $course->subjectName . '">' . $course->subjectName . '</option>';
        }

        echo $option;
    }





    function studentInsert(Request $req)
    {
        $req->validate([


            "class" => "required",
            "courses" => "required",
            
            
            "img" => "file|max:5000",
            "img" => "mimes:jpg,bmp,png",
            "img" => "required",
            
            
            "firstName" => "required",
            "lastName" => "required",
            "fatherName" => "required",
            "motherName" => "required",
            "guardianNum" => "required",
            "birthNum" => "required",
            "presentAddress" => "required",
            "parmanantAddress" => "required",
            "religion" => "required",
            "bloodGrp" => "required",
            "nationality" => "required",
            "prevSchName" => "required",

        ],[


            "class.required" => "Please, Enter the class",
            "courses.required" => "Please, Enter the course",
          
            "firstName.required" => "Please, Enter the first name",
            "lastName.required" => "Please, Enter the last name",
            "fatherName.required" => "Please, Enter the father name",
            "motherName.required" => "Please, Enter the mother name",
            "guardianNum.required" => "Please, Enter the guardian name",
            "birthNum.required" => "Please, Enter the birth registration number",
            "presentAddress.required" => "Please, Enter the present address",
            "parmanantAddress.required" => "Please, Enter the parmanat address",
            "religion.required" => "Please, Enter the religion ",
            "bloodGrp.required" => "Please, Enter the blood group",
            "nationality.required" => "Please, Enter the nationality",
            "prevSchName.required" => "Please, Enter the previous school",





        ]);
    }
}
