<?php

namespace App\Http\Controllers;

use App\Models\homeSecSocialModel;
use Illuminate\Support\Str;
use App\Models\homeSectionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class homeSectionController extends Controller
{
    function homeSectionpage()
    {
        $homeAllData = homeSectionModel::all();
        $homeAllSocialDataClient = homeSecSocialModel::all();
        return view("admin.homeSection.homeSectionpage", [
            'homeAllData' => $homeAllData,
            'homeAllSocialDataClient' => $homeAllSocialDataClient,
        ]);
    }

    function homeInsert(Request $req)
    {
        $req->validate([
            'home_name' => 'required',
            'home_description' => 'required',

            'home_image' => 'file|max:5000',
            'home_image' => 'required|mimes:jpg,bmp,png',
        ]);


        $homeCountData = homeSectionModel::count();

        if ($homeCountData < 1) {
            $homeSecId = homeSectionModel::insertGetId([
                'home_name' => $req->home_name,
                'home_description' => $req->home_description,
                'created_at' => Carbon::now(),
            ]);

            $homeSection_img = $req->home_image;
            $extention_home = $homeSection_img->getClientOriginalExtension();


            $after_replace_home = str_replace('', '-', $req->home_name);
            $fileName = Str::lower($after_replace_home) . "-" . rand(1000000, 199999) . "." . $extention_home;
            Image::make($homeSection_img)->save(public_path('uploads/homeSection/' . $fileName));

            homeSectionModel::find($homeSecId)->update([
                'home_image' => $fileName,
            ]);





            return back()->with('HomeinsertSuccess', "Insert Success");
        } else {
            return back()->with("homeInsertFail", "One user data already insert for home page!!");
        }
    }


    function homeSocialInsert(Request $req)
    {

        homeSecSocialModel::insert([
            'homeSocialIcon' => $req->home_socialIcon,
            'homeSocialaddress' => $req->home_socialaddress,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('HomeinsertSocialSuccess', "Insert Success");

    }


function Homedelete($homeSecId){
    homeSectionModel::find($homeSecId)->delete();
    return back();
}


function HomeParmanentdeletePage(){
    $AllhomeSecTrashed = homeSectionModel::onlyTrashed()->get();
    $AllhomeSecSocialTrashed = homeSecSocialModel::onlyTrashed()->get();
    return view("admin.homeSection.homeTrashBin",[
            'AllhomeSecTrashed' => $AllhomeSecTrashed,
            'AllhomeSecSocialTrashed' => $AllhomeSecSocialTrashed,
    ]);
}


function HomeParmanentRestore($homeSecResId){

    homeSectionModel::onlyTrashed()->find($homeSecResId)->restore();


    return back();

}


function HomeParmanentdelete($homeSecParDelId){


    $homeConentId = homeSectionModel::onlyTrashed()->where("id",$homeSecParDelId)->first()->home_image;
    $deleteImg = public_path("uploads/homeSection/". $homeConentId);
    unlink($deleteImg);

    homeSectionModel::onlyTrashed()->find($homeSecParDelId)->forceDelete();

    return back();

}





function homeSocialDeletePage($homesocialPageId){
    homeSecSocialModel::find($homesocialPageId)->delete();

    return back();
}


function homeSocialDeleteResore($homesocialPageId){

    homeSecSocialModel::onlyTrashed()->find($homesocialPageId)->restore();
     return back();

}


function homeSocialParmanantDelete($homeSecSocialParDelId){
    homeSecSocialModel::onlyTrashed()->find($homeSecSocialParDelId)->forceDelete();
    return back();
}


}
