<?php

namespace App\Http\Controllers;

use App\Models\addInventoryModel;
use App\Models\cartModel;
use App\Models\couponModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
  function cartInsert(Request $req)
  {




    $req->validate([
      'color_id' => 'required',
      'size' => 'required',
      'cart_quantity' => 'required',
    ],[
      'color_id.required'=>'Please Select the Color',
      'size.required'=>'Please Select the Size',
      'cart_quantity.required'=>'Please Select the Quantity',
    ]);


    if (Auth::guard("customerLogin")->check()) {

      if ($req->cart_quantity > addInventoryModel::where("product_id", $req->product_id)->where("Color_id", $req->color_id,)->where("size_id", $req->size,)->first()->Quantity) {

        $stockSize = addInventoryModel::where("product_id", $req->product_id)->where("Color_id", $req->color_id,)->where("size_id", $req->size,)->first()->Quantity;
        return back()->with("QuantityError", "Stock available: " . $stockSize  . " pcs");
      
      } 
      
      
      
      
      
      
      
      else {
        cartModel::insert([
          'customer_id' => Auth::guard("customerLogin")->id(),
          'product_id' => $req->product_id,
          'color_id' => $req->color_id,
          'size_id' => $req->size,
          'Quantity' => $req->cart_quantity,
          'created_at' => Carbon::now(),
        ]);

        return back()->with("cardAddedSuccess", "Product added to cart successfully");
      }
    } else {
      return redirect()->route("customerLoginRegPage")->with("PleaseLogin", "You must have to login first to add to cart");
    }
  }


  function cartItemDelete($cartItemDeleteId)
  {

    cartModel::find($cartItemDeleteId)->delete();
    return back();
  }


  function AllcartItemDelete()
  {
    cartModel::where("customer_id", Auth::guard("customerLogin")->id())->delete();
    return back();
  }


  function cartPage(Request $req)
  {
    $allCartInfo = cartModel::where("customer_id", Auth::guard("customerLogin")->id())->get();
    $coupon_code = $req->couponpage_name;
    $discount = 0;
    $message = '';
    $allDone = "";
    $type = '';
    if ($coupon_code == '') {
      $discount = 0;
    } else {

      if (couponModel::where("couponCode", $coupon_code)->exists()) {

        if (Carbon::now()->format('Y-m-d') < couponModel::where("couponCode", $coupon_code)->first()->couponValidity) {
          $type = couponModel::where("couponCode", $coupon_code)->first()->couponType;
          $discount = couponModel::where("couponCode", $coupon_code)->first()->couponDiscount;
          $allDone = "Voucer code: ";
        } else {
          $discount = 0;
          $message = 'Coupon code is expired!!';
        }
      } else {
        $discount = 0;
        $message = 'Invalid code.Try again!!';
      }
    }

    return view("frontend.cartPage", [
      'allCartInfo' => $allCartInfo,
      'coupon_code' => $coupon_code,
      'message' => $message,
      'discount' => $discount,
      'type' => $type,
      'allDone' => $allDone,
    ]);
  }




  function cartUpdate(Request $req)
  {
    foreach ($req->cartPageSizeSelection as $cart_id => $quantityCart) {

      cartModel::find($cart_id)->update([
        'Quantity' => $quantityCart,
      ]);
    }

    return back();
  }
}
