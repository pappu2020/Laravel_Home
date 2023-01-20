<?php

namespace App\Http\Controllers;

use App\Models\PageContactModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class pagecontactController extends Controller
{
    function contactPageView()
    {

        $allContactInfo = PageContactModel::all();
        return view("admin.contact.contactPageView",[
            'allContactInfo' => $allContactInfo,
        ]);
    }


    function pageContactInsert(Request $req){
        PageContactModel::insert([

            'customerCareNum' => $req->customerCareNum,
            'careerNum' => $req->careerNum,
            'email' => $req->email,
            'address' => $req->address,
            'created_at' => Carbon::now(),

        ]);

        return back();
    }


    function pagecontactEditPage($contactId){


        $contactInfoById = PageContactModel::where("id",$contactId)->get();


        return view("admin.contact.pagecontactEditPage",[
            'contactInfoById' => $contactInfoById,
        ]);


    } 
    
    function pagecontactEdit(Request $req){


      PageContactModel::find($req->contactId)->update([

            "customerCareNum" => $req->customerCareNum,
            "careerNum" => $req->careerNum,
            "email" => $req->email,
            "address" => $req->address,
           

      ]);

      return back();

    }



}
