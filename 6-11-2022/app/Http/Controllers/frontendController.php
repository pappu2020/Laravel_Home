<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\productModel;
use Illuminate\Http\Request;

class frontendController extends Controller
{


    function laravelHomePage(){
        return view("welcome");
    }
    
    
    
    
    
    function indexFrontend(){
        $allCategoryInfo = category::all();
        $allProductsInfo = productModel::latest()->take(8)->get();
        $allFeatureProductsInfo = productModel::latest()->take(3)->get();
        return view("frontend.index",[
            'allCategoryInfo' => $allCategoryInfo,
            'allProductsInfo' => $allProductsInfo,
            'allFeatureProductsInfo' => $allFeatureProductsInfo,
        ]);
    }
}
