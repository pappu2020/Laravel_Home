<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\customerQuotesModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class customerQuotesController extends Controller
{
    function customerQuotesPage(){
        $AllCustomerData = customerQuotesModel::all();
        return view("admin.customerQuotes.customerQuotesPage",[
            'AllCustomerData' => $AllCustomerData,
        ]);
    }


    function customerInsert(Request $req){
        $req->validate([
            'customerTitle' => 'required',
            'customerPosition' => 'required',
            'customer_description' => 'required',

            'customerImage' => 'file|max:5000',
            'customerImage' => 'required|mimes:jpg,bmp,png',
        ]);


        $customerSecId = customerQuotesModel::insertGetId([
            'customerTitle' => $req->customerTitle,
            'customerPosition' => $req->customerPosition,
            'customer_description' => $req->customer_description,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
            
        ]);

        $customerSection_img = $req->customerImage;
        $extention_customer= $customerSection_img->getClientOriginalExtension();


        $after_replace_customer = str_replace(' ', '-', $req->customerTitle);
        $fileName = Str::lower($after_replace_customer)."-".rand(1000000, 199999).".".$extention_customer;
        Image::make($customerSection_img)->save(public_path('uploads/customerSection/'.$fileName));

        customerQuotesModel::find($customerSecId)->update([
            'customerImage' => $fileName,
        ]);





        return back()->with('customerinsertSuccess', "Insert Success");



    }



    //Update

    function customerQuotesEditPage($customerEditPageId){

        $AllcustomerData = customerQuotesModel::where("id", $customerEditPageId)->first();

        return view("admin.customerQuotes.customerQuotesEditPage",[
            'AllcustomerData' => $AllcustomerData,
        ]);

    }


    function cutomerQuotesUpdate(Request $req)
    {
        if ($req->UpdatecustomerImage == null) {
            customerQuotesModel::where("id", $req->customerUpdateHiddenId)->update([
                'customerTitle' => $req->UpdatecustomerTitle,
                'customerPosition' => $req->UpdatecustomerPosition,
                'customer_description' => $req->Updatecustomer_description,
                'created_by' => Auth::id(),

            ]);
            return back()->with("updateCustomerSuccess", "update success!");
        } else {
            $customerContentId = customerQuotesModel::where("id", $req->customerUpdateHiddenId)->first()->customerImage;
            $deleteImg = public_path("uploads/customerSection/" . $customerContentId);
            unlink($deleteImg);


            $customerSection_img_update = $req->UpdatecustomerImage;
            $extention_customer_update = $customerSection_img_update->getClientOriginalExtension();


            $after_replace_customer_update = str_replace(' ', '-', $req->UpdatecustomerTitle);
            $fileNameUpdate = Str::lower($after_replace_customer_update) . "-" . rand(1000000, 199999) . "." . $extention_customer_update;
            Image::make($customerSection_img_update)->save(public_path('uploads/customerSection/'.$fileNameUpdate));

            customerQuotesModel::where("id", $req->customerUpdateHiddenId)->update([
                'customerTitle' => $req->UpdatecustomerTitle,
                'customerPosition' => $req->UpdatecustomerPosition,
                'customer_description' => $req->Updatecustomer_description,
                'created_by' => Auth::id(),
                'customerImage' => $fileNameUpdate,
            ]);

            return back()->with("updateCustomerSuccess", "update success!");
        }
    }





    //delete


    function cutomerQuotesGenDel($cusGenDelId){

        customerQuotesModel::find($cusGenDelId)->delete();
        return back();

    }


    function customerTrashbbinPage(){
        $AllCustomerTrashData = customerQuotesModel::onlyTrashed()->get();
        return view("admin.customerQuotes.customerTrashbbinPage",[
            'AllCustomerTrashData' => $AllCustomerTrashData,
        ]);
    }

    function customerQuotesRestore($cutomerQuotesresId){

        customerQuotesModel::onlyTrashed()->find($cutomerQuotesresId)->restore();
        return back();

    }


    function cutomerQuotesParDel($cutomerQuotesParId){

        $customerConentId = customerQuotesModel::onlyTrashed()->where("id", $cutomerQuotesParId)->first()->customerImage;
        $deleteImg = public_path("uploads/customerSection/" . $customerConentId);
        unlink($deleteImg);

        customerQuotesModel::onlyTrashed()->find($cutomerQuotesParId)->forceDelete();

        return back();

    }





}
