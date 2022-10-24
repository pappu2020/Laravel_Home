<?php

namespace App\Http\Controllers;

use App\Models\recentWorkModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class recentWorkController extends Controller
{
   function recentWorkPage(){
    $AllrecentData = recentWorkModel::all();
    return view("admin.recentWork.recentWorkPage",[
            'AllrecentData' => $AllrecentData,
    ]);
   }

   function recentWorkInsert(Request $req){
    $req -> validate([
            'recentTitle' => 'required',
            'recentSubTitle' => 'required',
            'recentImage' => 'file|max:5000',
            'recentImage' => 'required|mimes:jpg,bmp,png,webp',
    ]);


    $recentId = recentWorkModel::insertGetId([

            'recentTitle' => $req->recentTitle,
            'recentSubTitle' => $req->recentSubTitle,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),

    ]);


    $getRecentImage = $req->recentImage;
    $Extension = $getRecentImage ->getClientOriginalExtension();

    $afterName = str_replace(" ","-",$req->recentTitle);
    $fileName = Str::lower($afterName)."-".rand(100000,199999).".".$Extension;
    Image::make($getRecentImage)->save(public_path("uploads/recentWork/".$fileName));


    recentWorkModel::find($recentId)->update([
            'recentImage' => $fileName,
    ]);


    return back()->with("recentInsesrtSuccess","Insert Success!");


   




}





}
