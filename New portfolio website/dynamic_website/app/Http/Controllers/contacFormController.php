<?php

namespace App\Http\Controllers;

use App\Models\contactFormModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class contacFormController extends Controller
{

   function contactView(){
    $allContactList = contactFormModel::all();
    return view("admin.contactMe.contactView",[
            'allContactList' => $allContactList,
    ]);
   }
    function contactMeFormInsert(Request $req){
        $req -> validate([

            'contactFormName' => 'required',
            'contactFormEmail' => 'required',
            'contactFormMsg' => 'required',

        ]);


        contactFormModel::insert([
            'contactFormName' => $req ->contactFormName,
            'contactFormEmail' => $req ->contactFormEmail,
            'contactFormMsg' => $req ->contactFormMsg,
            'created_at' => Carbon::now(),
        ]);

        return back()->with("conactFormSendSuccess","Sent!!");
    }
}
