<?php

namespace App\Http\Controllers;

use App\Models\tagModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tagController extends Controller
{
    function tagPage()
    {

        $alltagInfo = tagModel::all();
        $alltagCount = tagModel::count();

        return view("admin.tag.tagPage",[
            'alltagInfo' => $alltagInfo,
            'alltagCount' => $alltagCount,
        ]);
    }
    
    
    function tagInsert(Request $req)
    {

        $req->validate([

            'tagName' => 'required',

        ],[
            'tagName.required' => "Please, Enter the tag name",
        ]);

        tagModel::insert([

            'tagName' => $req->tagName,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
           
        ]);

        return back()->with('insertSuccess',"Insert success!!");
    }
}
