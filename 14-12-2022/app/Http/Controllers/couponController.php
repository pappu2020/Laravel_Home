<?php

namespace App\Http\Controllers;

use App\Models\couponModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class couponController extends Controller
{
    function addCouponPage(){
        $allcouponInfo = couponModel::all();
        return view("admin.coupon.addCouponPage",[
            'allcouponInfo' => $allcouponInfo,
        ]);
    }

    function couponInsert(Request $req){
        $req->validate([
            'couponCode' => 'required',
            'couponType' => 'required',
            'couponDiscount' => 'required',
            'couponValidity' => 'required',
        ]);


        couponModel::insert([

            'couponCode' => $req->couponCode,
            'couponType' => $req->couponType,
            'couponDiscount' => $req->couponDiscount,
            'couponValidity' => $req->couponValidity,
            'created_at' => Carbon::now(),

        ]);

        return back();



    }
}
