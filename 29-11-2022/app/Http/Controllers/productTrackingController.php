<?php

namespace App\Http\Controllers;

use App\Models\ordersBillModel;
use Illuminate\Http\Request;

class productTrackingController extends Controller
{
    function statusUpdatePage(){
        $allorderList = ordersBillModel::all();
        return view("admin.ProductTracking.statusUpdatePage",[
            'allorderList' => $allorderList,
        ]);
    }


    function statusChange(Request $req){
        $explode_part = explode(",", $req->stutusButton);

       

        ordersBillModel::where("id",$explode_part[0])->update([
            'status' => $explode_part[1], 
        ]);

        return back();
    }
}
