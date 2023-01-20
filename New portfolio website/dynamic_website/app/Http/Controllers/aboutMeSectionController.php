<?php

namespace App\Http\Controllers;

use App\Models\aboutMeSectionDesModel;
use App\Models\aboutMeSectionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class aboutMeSectionController extends Controller
{
    function aboutSectionpage()
    {

        $AllaboutSecData = aboutMeSectionModel::all();
        $AllaboutSecDecData = aboutMeSectionDesModel::all();
        return view("admin.aboutMeSection.aboutSectionpage", [
            'AllaboutSecData' => $AllaboutSecData,
            'AllaboutSecDecData' => $AllaboutSecDecData,
        ]);
    }


    function aboutSectionInsert(Request $req)
    {


        $req->validate([
            'about_Exam_name' => 'required',
            'about_Exam_year' => 'required',
            'about_Exam_result' => 'required',
        ]);

        aboutMeSectionModel::insertGetId([
            'about_Exam_name' =>  $req->about_Exam_name,
            'about_Exam_year' =>  $req->about_Exam_year,
            'about_Exam_result' =>  $req->about_Exam_result,
            'created_by' =>  Auth::id(),
            'created_at' =>  Carbon::now(),
        ]);
        return back()->with("aboutinsertSuccess", "insert success!");
    }


    function aboutSectionDesInsert(Request $req)
    {



        $req->validate([
            'aboutSection_description' => 'required',
            'aboutImage' => 'file|max:5000',
            'aboutImage' => 'required|mimes:jpg,bmp,png',
        ]);
        $aboutCountData = aboutMeSectionDesModel::count();

        if ($aboutCountData < 1) {
            $aboutMeSecDesId = aboutMeSectionDesModel::insertGetId([
                'aboutSection_description' =>  $req->aboutSection_description,

                'created_by' =>  Auth::id(),
                'created_at' =>  Carbon::now(),

            ]);
            $aboutSection_img = $req->aboutImage;
            $extention_about = $aboutSection_img->getClientOriginalExtension();



            $fileNameDes = "aboutMeSection" . "-" . rand(1000000, 199999) . "." . $extention_about;
            Image::make($aboutSection_img)->save(public_path('uploads/aboutSection/' . $fileNameDes));

            aboutMeSectionDesModel::find($aboutMeSecDesId)->update([
                'aboutImage' => $fileNameDes,
            ]);

            return back()->with("aboutDesinsertSuccess", "insert success!");
        } else {
            return back()->with("aboutDesinsertFail", "One Data already insert");
        }
    }





    //update


    function aboutSectionpageUpdate($aboutSecInfoId)
    {

        $AllaboutSecInfo = aboutMeSectionModel::where("id", $aboutSecInfoId)->first();

        return view("admin.aboutMeSection.aboutSectionpageUpdateshow", [
            'AllaboutSecInfo' => $AllaboutSecInfo,
        ]);
    }


    function aboutSectionUpdate(Request $req)
    {


        aboutMeSectionModel::where("id", $req->aboutContentHiddenId)->update([
            'about_Exam_name' =>  $req->Update_about_Exam_name,
            'about_Exam_year' =>  $req->Update_about_Exam_year,
            'about_Exam_result' =>  $req->Update_about_Exam_result,

        ]);


        return back()->with("aboutSecContentUpdateSuccess", "Update Success!");
    }


    function aboutSectionDesPageUpdate($aboutSecDesInfoId)
    {

        $AllaboutSecDesInfo = aboutMeSectionDesModel::where("id", $aboutSecDesInfoId)->first();

        return view("admin.aboutMeSection.aboutSectionDesPageUpdate", [
            'AllaboutSecDesInfo' => $AllaboutSecDesInfo,
        ]);
    }


    function aboutSectionDesUpdate(Request $req)
    {


        if ($req->aboutDesImage == null) {
            aboutMeSectionDesModel::where("id", $req->aboutDesHiddenId)->update([
                'aboutSection_description' => $req->aboutSection_description,

            ]);
            return back()->with("aboutSecDesContentUpdateSuccess", "Update Success!");
        } else {
            $aboutDesContentId = aboutMeSectionDesModel::where("id", $req->aboutDesHiddenId)->first()->aboutImage;
            $deleteImgDes = public_path("uploads/aboutSection/". $aboutDesContentId);
            unlink($deleteImgDes);


            $aboutDesSection_img_update = $req->aboutDesImage;
            $extention_about_update = $aboutDesSection_img_update->getClientOriginalExtension();



            $fileNameUpdate = "aboutMeSec" . "-" . rand(1000000, 199999) . "." . $extention_about_update;
            Image::make($aboutDesSection_img_update)->save(public_path('uploads/aboutSection/' . $fileNameUpdate));


            aboutMeSectionDesModel::where("id", $req->aboutDesHiddenId)->update([
                'aboutSection_description' => $req->aboutSection_description,
                'aboutImage' => $fileNameUpdate,
            ]);
            return back()->with("aboutSecDesContentUpdateSuccess", "Update Success!");
        }
    }




  //delete

  function aboutSectiondelete($aboutSecId){

    aboutMeSectionModel::find($aboutSecId)->delete();
    return back();

  }


  function aboutSectionParmanantDeletePage(){

  $AllaboutSecTrashed =  aboutMeSectionModel::onlyTrashed()->get();
    return view("admin.aboutMeSection.aboutSectionParmanantDeletePage",[
            'AllaboutSecTrashed' => $AllaboutSecTrashed,
    ]);
  }



  function aboutSectionParmanantResore($aboutSecResId){
     aboutMeSectionModel::onlyTrashed()->where("id",$aboutSecResId)->restore();

     return back();
  }



  function aboutSectionpageParmanantDelete($aboutSecParDelId){


        aboutMeSectionModel::onlyTrashed()->find($aboutSecParDelId)->forceDelete();

        return back();

  }





  function aboutSectionDesdelete($aboutSecDesId){


        aboutMeSectionDesModel::find($aboutSecDesId)->delete();
        return back();

  }


  function aboutSectionDesParmanantDeletePage(){
        $AllaboutDesSecTrashed =  aboutMeSectionDesModel::onlyTrashed()->get();
        return view("admin.aboutMeSection.aboutSectionDesParmanantDeletePage", [
            'AllaboutDesSecTrashed' => $AllaboutDesSecTrashed,
        ]);
  }


  function aboutSectionDesParmanantResore($aboutSecDEsResId){
        aboutMeSectionDesModel::onlyTrashed()->where("id", $aboutSecDEsResId)->restore();

        return back();
  }


  function aboutSectionpageDesParmanantDelete($aboutSecDesParDelId){

        $aboutDesContentDeleteId = aboutMeSectionDesModel::onlyTrashed()->where("id", $aboutSecDesParDelId)->first()->aboutImage;
        $deleteImgDesParmanant = public_path("uploads/aboutSection/" . $aboutDesContentDeleteId);
        unlink($deleteImgDesParmanant);

        aboutMeSectionDesModel::onlyTrashed()->find($aboutSecDesParDelId)->forceDelete();
        return back();

  }














}
