<?php

namespace App\Http\Controllers;

use App\Models\recentImageUploadModel;
use App\Models\recentWorkModel;
use App\Models\recentWorkNumberModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class recentWorkController extends Controller
{
        function recentWorkPage()
        {
                $AllrecentData = recentWorkModel::all();
                $AllrecentNumberData = recentWorkNumberModel::all();
                return view("admin.recentWork.recentWorkPage", [
                        'AllrecentData' => $AllrecentData,
                        'AllrecentNumberData' => $AllrecentNumberData,
                ]);
        }

        function recentWorkInsert(Request $req)
        {
                $req->validate([
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
                $Extension = $getRecentImage->getClientOriginalExtension();

                $afterName = str_replace(" ", "-", $req->recentTitle);
                $fileName = Str::lower($afterName) . "-" . rand(100000, 199999) . "." . $Extension;
                Image::make($getRecentImage)->save(public_path("uploads/recentWork/" . $fileName));


                recentWorkModel::find($recentId)->update([
                        'recentImage' => $fileName,
                ]);


                return back()->with("recentInsesrtSuccess", "Insert Success!");
        }



        function recentEditPage($recentEditId)
        {

                $allRecentData = recentWorkModel::where("id", $recentEditId)->first();

                return view("admin.recentWork.recentEditPage", [
                        'allRecentData' => $allRecentData,
                ]);
        }



        function recentWorkUpdate(Request $req)
        {

                $req->validate([
                        'UpdaterecentTitle' => 'required',
                        'UpdaterecentSubTitle' => 'required',

                ]);


                if ($req->UpdaterecentImage == null) {
                        recentWorkModel::where("id", $req->recentUpdateHiddenId)->update([
                                'recentTitle' => $req->UpdaterecentTitle,
                                'recentSubTitle' => $req->UpdaterecentSubTitle,
                        ]);
                        return back()->with("updateRecentSuccess", "update success!");
                } else {
                        $recentContentId = recentWorkModel::where("id", $req->recentUpdateHiddenId)->first()->recentImage;
                        $deleteImg = public_path("uploads/recentWork/" . $recentContentId);
                        unlink($deleteImg);


                        $recentSection_img_update = $req->UpdaterecentImage;
                        $extention_recent_update = $recentSection_img_update->getClientOriginalExtension();


                        $after_replace_recent_update = str_replace('', '-', $req->UpdaterecentTitle);
                        $fileNameUpdate = Str::lower($after_replace_recent_update) . "-" . rand(1000000, 199999) . "." . $extention_recent_update;
                        Image::make($recentSection_img_update)->save(public_path("uploads/recentWork/" . $fileNameUpdate));

                        recentWorkModel::where("id", $req->recentUpdateHiddenId)->update([
                                'recentTitle' => $req->UpdaterecentTitle,
                                'recentSubTitle' => $req->UpdaterecentSubTitle,
                                'recentImage' => $fileNameUpdate,
                        ]);

                        return back()->with("updateRecentSuccess", "update success!");
                }
        }





        //Delete

        function recentGeneralDelete($recentDelId)
        {
                recentWorkModel::find($recentDelId)->delete();
                return back();
        }




        function recentTrashbbinPage()
        {

                $AllrecentTrashedData = recentWorkModel::onlyTrashed()->get();
                $AllrecentNumberTrashedData = recentWorkNumberModel::onlyTrashed()->get();
                return view("admin.recentWork.recentTrashbbinPage", [
                        'AllrecentTrashedData' => $AllrecentTrashedData,
                        'AllrecentNumberTrashedData' => $AllrecentNumberTrashedData,
                ]);
        }


        function recentTrashRestore($recentTrashRestoreId){

                recentWorkModel::onlyTrashed()->where("id", $recentTrashRestoreId)->restore();
                return back();

        }
        
        
        function recentTrashDelete($recentTrashDeleteId){

                $getImageTrashed = recentWorkModel::onlyTrashed()->where("id", $recentTrashDeleteId)->first()->recentImage;
                $deleteTrashImg = public_path("uploads/recentWork/" . $getImageTrashed);
                unlink($deleteTrashImg);

                recentWorkModel::onlyTrashed()->where("id", $recentTrashDeleteId)->forceDelete();
                return back();

        }



        



        //Recent Work NUmber Section


        function recentWorkNumberInsert(Request $req){

                $req->validate([
                        'recentNumberIcon' => 'required',
                        'recentNumber' => 'required',
                        'recentNumberTitle' => 'required',
                        
                ]);


                recentWorkNumberModel::insert([

                        'recentNumberIcon' => $req->recentNumberIcon,
                        'recentNumber' => $req->recentNumber,
                        'recentNumberTitle' => $req->recentNumberTitle,
                        'created_by' => Auth::id(),
                        'created_at' => Carbon::now(),

                ]);

                return back()->with("recentNumberInsesrtSuccess", "Insert Success!");

        }


        function recentWorkNumberGeneralDelete($recentNumGenDeleteId){

                recentWorkNumberModel::find($recentNumGenDeleteId)->delete();
                return back();

        }


        function recentWorkNumberTrashRestore($recentNumTrashId){
                recentWorkNumberModel::onlyTrashed()->where("id", $recentNumTrashId)->restore();
                return back();

        }

        function recentWorkNumberTrashParmanantDelete($recentNumTrashParDelId)
        {


                recentWorkNumberModel::onlyTrashed()->where("id", $recentNumTrashParDelId)->forceDelete();
                return back();
        }



        //Recent work image upload


        function addRecentWorkImagePage(){
                $allRecentWorkInfo = recentWorkModel::all();
                return view("admin.recentWork.addRecentWorkImagePage",[
                        'allRecentWorkInfo' => $allRecentWorkInfo,
                ]);
        }


        function addRecentWorkImageInsert(Request $req){


                $getRenetsImages = $req->extrsrecentImage;

                foreach ($getRenetsImages as $recentImage) {
                        $extension = $recentImage->getClientOriginalExtension();
                        

                        $fileName = $req->recent_work_name.'-'.rand(100000, 1999999)."." . $extension;
                        Image::make($recentImage)->save(public_path("uploads/extraRecentWorkImages/" . $fileName));


                        recentImageUploadModel::insert([
                                'recentWorkId' =>  $req->recent_work_name,
                                'images' => $fileName,
                                'created_at' => Carbon::now(),
                        ]);

                        
                }

                return back();

        }






        //single recent work 

        function singleRecentWorkPage($reecentId){
                $recentImage = recentImageUploadModel::where("recentWorkId", $reecentId)->get();
                return view("admin.recentWork.singleRecentWorkPage",[
                        'recentImage' => $recentImage,
                ]);
        }
}
