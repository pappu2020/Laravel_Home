<?php

namespace App\Http\Controllers;

use App\Mail\invoiceMail;
use App\Models\addInventoryModel;
use App\Models\BillingAddressModel;
use App\Models\cartModel;
use App\Models\cities;
use App\Models\countries;
use App\Models\orderItemsModel;
use App\Models\ordersBillModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class checkoutController extends Controller
{
  function checkoutPage()
  {
    $allCartInfo = cartModel::where("customer_id", Auth::guard("customerLogin")->id())->get();
    $allCartCount = cartModel::where("customer_id", Auth::guard("customerLogin")->id())->count();
    $Allcountry = countries::all();
    return view("frontend.checkoutPage", [
      'allCartInfo' => $allCartInfo,
      'allCartCount' => $allCartCount,
      'Allcountry' => $Allcountry,
    ]);
  }


  function ajaxGetCity(Request $req)
  {
    $getCities = cities::where("country_id", $req->country_id)->get();
    $str = '<option value="">-- Select City --</option>';

    foreach ($getCities as $Cities) {
      $str .= '<option value="' . $Cities->id . '">' . $Cities->name . '</option>';
    }

    echo $str;
  }





  function checkoutFormInsert(Request $req)
  {


    $req->validate([

      'billName' => 'required',
      'billEmail' => 'required',

      'billMobile' => 'required',
      'billAddress' => 'required',
      'billCountry' => 'required',
      'billCity' => 'required',
      'billZip' => 'required',
      'billAdditionalInfo' => 'required',

    ]);




    $order_id = "showpnoMart" . "-" . Carbon::now()->format('Y-m-d') . "-" . rand(9999999999, 1000000000);

    if ($req->payment_method == 1) {
      ordersBillModel::insert([
        'order_id' => $order_id,
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



      $cartsInfo = cartModel::where("customer_id", Auth::guard("customerLogin")->id())->get();


      foreach ($cartsInfo  as $carts) {

        orderItemsModel::insert([
          'order_id' => $order_id,
          'customer_id' => Auth::guard("customerLogin")->id(),
          'product_id' => $carts->product_id,
          'price' => $carts->rel_to_product->After_discount,
          'color' => $carts->color_id,
          'size' => $carts->size_id,
          'quantity' => $carts->Quantity,
          'created_at' => Carbon::now(),
        ]);



        if (addInventoryModel::where("product_id", $carts->product_id)->where("Color_id", $carts->color_id,)->where("size_id", $carts->size_id,)->first()->Quantity > 0) {
          addInventoryModel::where("product_id", $carts->product_id)->where("Color_id", $carts->color_id,)->where("size_id", $carts->size_id,)->decrement("Quantity", $carts->Quantity);
        } else {
          return redirect()->route("productDetails")->with("quantity_zero", "0");
        }
      }

      // Mail::to($req->billEmail)->send(new invoiceMail($order_id));

      //     $url = "https://bulksmsbd.net/api/smsapi";
      //     $api_key = "{i5fKe1NZdlNWvbQZ3Fqf}";
      //     $senderid = "{pappu2022}";
      //     $number = "88016xxxxxxxx,88019xxxxxxxx";
      //     $message = "Congratualations!! Your order no.". $order_id ."has been successfully Placed please ready".$req->totalAmountForCartPage + $req->charge."for received product";
      //      
      //     $data=[
      //         "api_key" => $api_key,
      //         "senderid" => $senderid,
      //         "number" => $number,
      //         "message" => $message
      //     ];
      //     $ch = curl_init();
      //     curl_setopt($ch, CURLOPT_URL, $url);
      //     curl_setopt($ch, CURLOPT_POST, 1);
      //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      //     $response = curl_exec($ch);
      //     curl_close($ch);
      //     return $response;
      cartModel::where("customer_id", Auth::guard("customerLogin")->id())->delete();
      return redirect()->route("orderSuccessRoute")->with("orderSuccess", $order_id);
    } elseif ($req->payment_method == 2) {
      $customer_order_info = $req->all();
      return redirect()->route("pay")->with("customer_order_info", $customer_order_info);
    } else {
      $customer_order_info = $req->all();
      return redirect()->route("stripe")->with("customer_order_info", $customer_order_info);
    }
  }


  function orderSuccessRoute()
  {
    $orderSessionId = session('orderSuccess');

    if (session("orderSuccess")) {
      return view("frontend.orderSuccessPage", [
        'orderSessionId' => $orderSessionId,
      ]);
    } else {
      abort('404');
    }
  }
}
