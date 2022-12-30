<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\productModel;
use Illuminate\Http\Request;

class searchController extends Controller
{
    function searchPage(Request $req){

        $data = $req->all();

        $allProductInfo = productModel::where(function ($q) use ($data){

            $min = 0;

            if(!empty($data['min']) && $data['min'] != '' && $data['min'] != 'undefined'){
                $min = $data['min'];
            }

            else{
                $min = 1;
            }

            if(!empty($data['q']) && $data['q'] != '' && $data['q'] != 'undefined'){
                $q->where(function ($q) use ($data){

                    $q->where('product_name', 'like', '%'. $data['q'] . '%');
                    $q->Orwhere('product_Short_desp', 'like', '%'. $data['q'] . '%');
                    $q->Orwhere('product_Long_desp', 'like', '%'. $data['q'] . '%');

                });
            }
            
            
            if(!empty($data['min']) && $data['min'] != '' && $data['min'] != 'undefined' || !empty($data['max']) && $data['max'] != '' && $data['max'] != 'undefined'){

                $q->whereBetween('After_discount',[$min,$data['max']]);

                
            } 
            
            if(!empty($data['categoryInfo']) && $data['categoryInfo'] != '' && $data['categoryInfo'] != 'undefined'){

                $q->where('category_id',[$data['categoryInfo']]);

                
            }

        })->get();

        $allCategoryInfo = category::all();
        return view("frontend.searchPage",[
            'allProductInfo' => $allProductInfo,
            'allCategoryInfo' => $allCategoryInfo,
        ]);
    }
}
