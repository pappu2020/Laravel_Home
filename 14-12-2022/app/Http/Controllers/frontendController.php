<?php

namespace App\Http\Controllers;

use App\Models\addColorModel;
use App\Models\addInventoryModel;
use App\Models\addSizeModel;
use App\Models\category;
use App\Models\orderItemsModel;
use App\Models\productModel;
use App\Models\productThumbsnailModel;
use Illuminate\Http\Request;

class frontendController extends Controller
{


    function adminLogin()
    {
        return view("welcome");
    }





    function indexFrontend()
    {
        $allCategoryInfo = category::all();
        $allProductsInfo = productModel::latest()->take(8)->get();
        $allFeatureProductsInfo = productModel::latest()->take(3)->get();
        return view("frontend.index", [
            'allCategoryInfo' => $allCategoryInfo,
            'allProductsInfo' => $allProductsInfo,
            'allFeatureProductsInfo' => $allFeatureProductsInfo,
        ]);
    }


    function productDetails($slug)
    {
        $getProductDetails = productModel::where("slug", $slug)->get();
        $getProductThumbedDetails = productThumbsnailModel::where("product_id", $getProductDetails->first()->id)->get();
        $getsimilarProduct = productModel::where("category_id", $getProductDetails->first()->category_id)->where("id", "!=", $getProductDetails->first()->id)->get();

        $getAvailableColor = addInventoryModel::where("product_id", $getProductDetails->first()->id)->groupBy('Color_id')->selectRaw('count(*) as total,Color_id')->get();

        $getsize = addSizeModel::all();
        $getAvailableSize = addInventoryModel::where("product_id", $getProductDetails->first()->id)->first()->size_id;


        $allReview = orderItemsModel::where("product_id", $getProductDetails->first()->id)->where("review","!=",null)->get();
        $allReviewCount = orderItemsModel::where("product_id", $getProductDetails->first()->id)->where("review","!=",null)->count();
        $allStarCount = orderItemsModel::where("product_id", $getProductDetails->first()->id)->where("review","!=",null)->sum("star");


       

        return view("frontend.productDetails", [
            'getProductDetails' => $getProductDetails,
            'getProductThumbedDetails' => $getProductThumbedDetails,
            'getsimilarProduct' => $getsimilarProduct,
            'getAvailableColor' => $getAvailableColor,
            'getsize' => $getsize,
            'getAvailableSize' => $getAvailableSize,
            'allReview' => $allReview,
            'allReviewCount' => $allReviewCount,
            'allStarCount' => $allStarCount,

        ]);
    }


    function getSize(Request $req)
    {

        $getClickedSize = addInventoryModel::where("product_id", $req->product_id)->where("Color_id", $req->color_id)->get();
        $str = "";

        foreach ($getClickedSize as $ClickedSize) {
            $str .= '<div class="form-check size-option form-option form-check-inline mb-2">
                                                <input class="form-check-input" type="radio" name="size"
                                                    id="{{ $size' . $ClickedSize->rel_to_size->id . ' }}"
                                                    value="' . $ClickedSize->rel_to_size->id . '">
                                                <label class="form-option-label"
                                                    for="{{ $size' . $ClickedSize->rel_to_size->id . ' }}">' . $ClickedSize->rel_to_size->SizeName . '</label>
                                            </div>';
        }

        echo $str;;
    }
}
