<?php

namespace App\Http\Controllers;

use App\Models\BillingAddressModel;
use App\Models\cartModel;
use App\Models\cities;
use App\Models\countries;
use App\Models\ordersBillModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    function checkoutPage(){
        $allCartInfo = cartModel::where("customer_id",Auth::guard("customerLogin")->id())->get();
        $allCartCount = cartModel::where("customer_id",Auth::guard("customerLogin")->id())->count();
        $Allcountry = countries::all();
        return view("frontend.checkoutPage",[
            'allCartInfo' => $allCartInfo,
            'allCartCount' => $allCartCount,
            'Allcountry' => $Allcountry,
        ]);
    }


   function ajaxGetCity(Request $req){
       $getCities = cities::where("country_id",$req->country_id)->get();
       $str = '<option value="">-- Select City --</option>';

       foreach($getCities as $Cities){
            $str .= '<option value="'. $Cities->id.'">' . $Cities->name.'</option>';
           
       }

        echo $str;

      
   }





   function checkoutFormInsert(Request $req){
     $order_id = "showpnoMart"."-".Carbon::now()->format('Y-m-d')."-".rand(9999999999,1000000000);

     if($req->payment_method == 1){
        ordersBillModel::insert([
           'order_id' =>$order_id,
            'customer_id' => Auth::guard("customerLogin")->id(),
            'sub_total' => $req->subTotalAmountForCartPage,
            'Discount' => $req->discountForCartPage,
            'Delivery_charge' => $req->charge,
            'Total_amount' => $req->totalAmountForCartPage + $req->charge,
            'payment_method' => $req->payment_method,
            'created_at' => Carbon::now(),
        ]);


      BillingAddressModel::insert([
                'order_id' => $order_id,
                'customer_id' => Auth::guard("customerLogin")->id(),
                'name' => $req->billName,
                'email' => $req->billEmail,
                'phone' => $req->billMobile,
                'company' => $req->billCompany,
                'Address' => $req->billAddress,
                'Zip' => $req->billZip,
                'country_id' => $req->billCountry,
                'city_id' => $req->billCity,
                'notes' => $req->billAdditionalInfo,
                'created_at' => Carbon::now(),

      ]);








        return back();
     }

     elseif($req->payment_method == 2){
          echo "SSL";
     }

     else{
            echo "swipe";
     }
     
   }








}