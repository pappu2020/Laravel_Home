<?php

namespace App\Http\Controllers;

use App\Models\serviceSectionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class serviceSectionController extends Controller
{
    function serviceSectionPage(){
        $AllServiceSecData = serviceSectionModel::all();
        return view("admin.ServiceSection.serviceSectionPage",[
            'AllServiceSecData' => $AllServiceSecData,
        ]);
    }


    function serviceSectionInsert(Request $req){
        $req -> validate([

            'service_title' => "required",
            'service_icon' => "required",
            'service_description' => "required",
            

        ]);


        serviceSectionModel::insert([
            'service_title' => $req->service_title,
            'service_icon' => $req->service_icon,
            'service_description' => $req->service_description,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        return back()->with("serviceInsertSuccess","Insert Success!!");
    }



  function serviceSectionEditPage($serviceEditId){
        $AllServiceSecUpdateData = serviceSectionModel::where("id", $serviceEditId)->first();
        return view("admin.ServiceSection.serviceSectionEditPage",[
            'AllServiceSecUpdateData' => $AllServiceSecUpdateData,
        ]);
  }


  function serviceSectionUpdate(Request $req){
      serviceSectionModel::find($req->serviceUpdateHiddenId)->update([
            'service_title' => $req->service_title,
            'service_icon' => $req->service_icon,
            'service_description' => $req->service_description,
            'updated_at' => Carbon::now(),
            'created_by' => Auth::id(),
            
      ]);
        return back()->with("serviceUpdateSuccess", "Update Success!!");
  }


  function serviceSectionDelete($serviceDeleteId){

    serviceSectionModel::find($serviceDeleteId)->delete();
    return back();

  }


  function serviceSectionParmanantDeletePage(){
   $AllserviceTrashedData= serviceSectionModel::onlyTrashed()->get();
    return view("admin.ServiceSection.serviceSectionParmanantDeletePage",[
            'AllserviceTrashedData'=> $AllserviceTrashedData,
    ]);
  }

  function serviceSectionRestore($serviceRestoreId){

    serviceSectionModel::onlyTrashed()->where("id", $serviceRestoreId)->restore();
    return back();

  }


  function serviceSectionParmanantDelete($serviceParDelId){
        serviceSectionModel::onlyTrashed()->where("id", $serviceParDelId)->forceDelete();
        return back();
  }






}
