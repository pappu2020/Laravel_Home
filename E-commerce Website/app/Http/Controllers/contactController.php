<?php

namespace App\Http\Controllers;

use App\Models\PageContactModel;
use App\Models\WebPageContactModel;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function webpagecontactPageView()
    {
        $allContactInfo = PageContactModel::all();
        return view("frontend.webpagecontactPageView", [
            'allContactInfo' => $allContactInfo,
        ]);
    }


    function contactInfoInsert(Request $req){
        $req->validate([
            'name' =>"required",
            'email' =>"required",
            'subject' =>"required",
            'message' =>"required",
        ],[
            'name.required'=>"Please, Enter the name",
            'email.required'=>"Please, Enter the email",
            'subject.required'=>"Please, Enter the subject",
            'message.required'=> "Please, Enter the message",
        ]);


        WebPageContactModel::insert([

            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message,

        ]);


        return back();
    }
}
