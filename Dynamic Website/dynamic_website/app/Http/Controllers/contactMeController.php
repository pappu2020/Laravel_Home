<?php

namespace App\Http\Controllers;

use App\Models\contactMeModel;
use App\Models\customerQuotesModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contactMeController extends Controller
{
    function contactMePage()
    {
        $allContactData = contactMeModel::all();
        return view("admin.contactMe.contactMePage", [
            'allContactData' => $allContactData,
        ]);
    }


    function contactMeInsert(Request $req)
    {
        $req->validate([
            'contact_country_name' => 'required',
            'contact_email' => 'required',
            'contact_address' => 'required',
            'contact_phone_num' => 'required',
        ]);


        $countContactMeData = contactMeModel::count();

        if ($countContactMeData < 1) {

            contactMeModel::insert([
                'contact_country_name' => $req->contact_country_name,
                'contact_email' => $req->contact_email,
                'contact_address' => $req->contact_address,
                'contact_phone_num' => $req->contact_phone_num,
                'created_by' => Auth::id(),
                'created_at' => Carbon::now(),
            ]);

            return back()->with('contactinsertSuccess', "Insert Success");
        }


        else{
            return back()->with('contactinsertfail', "One Data already Insert!!");
        }
    
    }




    function contactMeUpdate(Request $req){
        $req->validate([
            'Updatecontact_country_name' => 'required',
            'Updatecontact_email' => 'required',
            'Updatecontact_address' => 'required',
            'Updatecontact_phone_num' => 'required',
        ]);


        contactMeModel::find($req ->contactHiddenID)->update([
            'contact_country_name' => $req->Updatecontact_country_name,
            'contact_email' => $req->Updatecontact_email,
            'contact_address' => $req->Updatecontact_address,
            'contact_phone_num' => $req->Updatecontact_phone_num,
        ]);

        return back();
    }












    //Delete

    function contactMeGenDel($contactMeGenId){

        contactMeModel::find($contactMeGenId)->delete();
        return back();

    }


    function contactMeTrashedPage(){
        $AllcontactMeTrashedData = contactMeModel::onlyTrashed()->get();
        return view("admin.contactMe.contactMeTrashedPage",[
            'AllcontactMeTrashedData' => $AllcontactMeTrashedData,
        ]);
    }


    function contactMeRestore($contacMEresId){

        contactMeModel::onlyTrashed()->find($contacMEresId)->restore();
        return back();

    } 
    
    
    function contactMeParDel($contacMEParDelId){

        contactMeModel::onlyTrashed()->find($contacMEParDelId)->forceDelete();
        return back();

    }
}
