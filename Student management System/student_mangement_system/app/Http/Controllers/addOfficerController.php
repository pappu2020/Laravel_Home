<?php

namespace App\Http\Controllers;

use App\Models\addOfficerModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;
use Image;

class addOfficerController extends Controller
{
    function addofficerLoginPage()
    {
        return view("admin.employees.addOfficerLoginpage");
    }



    function addOfficerRegPage()
    {
        return view("admin.employees.addOfficerRegPage");
    }

    function addOfficerInsert(Request $req)
    {
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


        addOfficerModel::insert([
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
        return back()->with("Reg_success_admission", "Registration is successfully done");
    }



    function adOfficerLoginCheck(Request $req)
    {
        
        if($req->email=="" && $req->password ==""){
            return redirect()->route("addofficerLoginPage")->with("adOfficerLoginFailedEmpty", "Email and Password is required"); 
        }
        
        
        if (Auth::guard("addofficerguard")->attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route("adOffierPage");
        } else {
            return redirect()->route("addofficerLoginPage")->with("adOfficerLoginFailed", "Password or username did not matched");
        }
    }


    function adOffierPage()
    {
        return view("admin.addOfficer.adOffierPage");
    }

    function logoutaddOfficer()
    {

        Auth::guard("addofficerguard")->logout();
        return redirect()->route("addofficerLoginPage");
    }
}
