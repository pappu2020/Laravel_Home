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

        if ($req->email == "" && $req->password == "") {
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


    function adOfficerInfoUpdate(Request $req)
    {

        addOfficerModel::where("id", Auth::guard("addofficerguard")->id())->update([
            'name' => $req->Name,
            'fatherName' => $req->FatherName,
            'motherName' => $req->MotherName,

            'nationalid' => $req->NationalId,
            'birthRegNum' => $req->BirthReg,
            'dob' => $req->Dob,
            'bloodGrp' => $req->BloodGrp,
            'religion' => $req->Religion,
            'Gender' => $req->Gender,
            'Howtoknowaboutus' => $req->HoWTo,
            'presentAddress' => $req->Present,
            'parmanentAddress' => $req->Parmanant,
        ]);


        return back()->with("adOfficerupdateSuccess", "update success!!!");
    }


function adOfficerPicUpload(Request $req){

        if (Auth::guard("addofficerguard")->user()->photo == null) {
            $adofficerName = Auth::guard("addofficerguard")->user()->name;




            $getImageFromForm = $req->addadOfficerProfileup;
            $extention = $getImageFromForm->getClientOriginalExtension();

            $replaceSpaceName = str_replace(' ', '-', $adofficerName);
            $fileName = Str::lower($replaceSpaceName) . "-" . rand(999999, 100000) . "-" . $extention;
            Image::make($getImageFromForm)->save(public_path("uploads/adofficer/" . $fileName));

            addOfficerModel::where("id", Auth::guard("addofficerguard")->user()->id)->update([
                'photo' => $fileName,
            ]);

            return back();
        } else {
            $delete_pic = public_path('uploads/adofficer/' . Auth::guard("addofficerguard")->user()->photo);
            unlink($delete_pic);
            $adofficerName = Auth::guard("addofficerguard")->user()->name;




            $getImageFromForm = $req->addadOfficerProfileup;
            $extention = $getImageFromForm->getClientOriginalExtension();

            $replaceSpaceName = str_replace(' ', '-', $adofficerName);
            $fileName = Str::lower($replaceSpaceName) . "-" . rand(999999, 100000) . "-" . $extention;
            Image::make($getImageFromForm)->save(public_path("uploads/adofficer/" . $fileName));

            addOfficerModel::where("id", Auth::guard("addofficerguard")->user()->id)->update([
                'photo' => $fileName,
            ]);

            return back();
            
        }

}


}
