<?php

namespace App\Http\Controllers;

use App\Models\cartModel;
use App\Models\cities;
use App\Models\countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    function checkoutPage(){
        $allCartInfo = cartModel::where("customer_id",Auth::guard("customerLogin")->id())->get();
        $Allcountry = countries::all();
        return view("frontend.checkoutPage",[
            'allCartInfo' => $allCartInfo,
            'Allcountry' => $Allcountry,
        ]);
    }


   function ajaxGetCity(Request $req){
       $getCities = cities::where("country_id",$req->country_id)->get();
       $str = '<option value="">-- Select City --</option>';

       foreach($getCities as $Cities){
            $str .= '<option value="">' . $Cities->name.'</option>';
           
       }

        echo $str;

      
   }








}
