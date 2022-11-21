<?php

namespace App\Http\Controllers;

use App\Models\employeeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class employeeController extends Controller
{
    function employeeReg(){
        return view("admin.employees.employeeRegForm");
    }


    function employeeInsert(Request $req){

        $req->validate([

            'name' => 'required',
            'phoneNum' => 'required',
            'email' => 'required',
            
            'password' => 'required|confirmed',
            'password' => Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
            'password_confirmation' => 'required',
            'postion' => 'required',
            'fatherName' => 'required',
            'motherName' => 'required',
            'nationalid' => 'required',
            'dob' => 'required',
            'bloodGrp' => 'required',
            'religion' => 'required',
            'Gender' => 'required',
            'presentAddress' => 'required',
            'parmanentAddress' => 'required',
           

        ]);

        if($req->name){
            $nameOld = $req->name;
        }


        employeeModel::insert([
            'name' => $req->name,
            'phoneNum' => $req->phoneNum,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'postion' => $req->postion,
            'fatherName' => $req->fatherName,
            'motherName' => $req->motherName,
            'gurdianPhone' => $req->gurdianPhone,
            'nationalid' => $req->nationalid,
            'birthRegNum' => $req->birthRegNum,
            'dob' => $req->dob,
            'bloodGrp' => $req->bloodGrp,
            'religion' => $req->religion,
            'Gender' => $req->Gender,
            'Howtoknowaboutus' => $req->Howtoknowaboutus,
            'presentAddress' => $req->presentAddress,
            'parmanentAddress' => $req->parmanentAddress,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        return back()->with("Reg_success","Registration is successfully done");

    }
}


