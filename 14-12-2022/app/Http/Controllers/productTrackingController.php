<?php

namespace App\Http\Controllers;

use App\Models\orderItemsModel;
use App\Models\ordersBillModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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


    function downloadInvoice($orders_id){
        $order_info  = orderItemsModel::find($orders_id);
        $pdf = Pdf::loadView("invoice.invoice",[
            'orderId' => $order_info->order_id,
        ]);
        
        
        
        return $pdf->download('invoice.pdf');
    }
}
