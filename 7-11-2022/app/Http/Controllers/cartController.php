<?php

namespace App\Http\Controllers;

use App\Models\cartModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    function cartInsert(Request $req)
    {
        if (Auth::guard("customerLogin")->check()) {
            cartModel::insert([
                'customer_id' => Auth::guard("customerLogin")->id(),
                'product_id' => $req->product_id,
                'color_id' => $req->color_id,
                'size_id' => $req->size,
                'Quantity' => $req->cart_quantity,
                'created_at' => Carbon::now(),
            ]);

            return back()->with("cardAddedSuccess", "Product added to cart successfully");
        } else {
            return redirect()->route("customerLoginRegPage")->with("PleaseLogin", "You must have to login first to add to cart");
        }
    }
}
