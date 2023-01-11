<?php

namespace App\Http\Controllers;

use App\Models\brandModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class brandController extends Controller
{
    function addBrandPage(){

        $allBrand = brandModel::all();
        return view("admin.Brand.addBrandPage",[
            'allBrand' => $allBrand,
        ]);
    }


    function brandInsert(Request $req){


        $req->validate([
            "brand_name" => "required",
            'brandLogo' => 'required|file|max:5000',
            'brandLogo' => 'mimes:jpg,jpeg,png,gif',
        ],[
            "brand_name.required" => "Please, Enter the brand Name",
            "brandLogo.required" => "Please, upload the brand logo",
            "brandLogo.max" => "Please, upload the brand logo less than 5mb",
        ]);
        if($req->brandLogo == ""){

            brandModel::insert([

                'brand_name' => $req->brand_name,
                'created_at' => Carbon::now(),

            ]);
            
            return back()->with("brandInsertSuccess","Insert Success!!");
        }


        else{
            $getBrandImg = $req->brandLogo;

            $extension = $getBrandImg->getClientOriginalExtension();

            $fileName = $req->brand_name."-".rand(100000,99999).".". $extension;

            Image::make($getBrandImg)->save(public_path("uploads/brand/".$fileName));

            brandModel::insert([

                'brand_name' => $req->brand_name,
                'brand_img' =>  $fileName,
                'created_at' => Carbon::now(),

            ]);

            return back()->with("brandInsertSuccess", "Insert Success!!");
        }
    }
}
