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
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;

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
        $AlltopSellingProduct = orderItemsModel::groupBy('product_id')
            ->selectRaw('sum(quantity) as sum, product_id')
            ->havingRaw('sum >= 1')
            ->take(3)
            ->orderBy("sum", "DESC")
            ->get();



        //recent view product

        $AllrecentProduct = json_decode(Cookie::get('recentViewedProduct'), true);


        if ($AllrecentProduct == null) {
            $get_recent = [];
            $after_unique = array_unique($get_recent);
        } else {
            $after_unique = array_unique($AllrecentProduct);
        }

        $AllrecentViewedProduct = productModel::find($after_unique)->take(3);












        return view("frontend.index", [
            'allCategoryInfo' => $allCategoryInfo,
            'allProductsInfo' => $allProductsInfo,
            'allFeatureProductsInfo' => $allFeatureProductsInfo,
            'AlltopSellingProduct' => $AlltopSellingProduct,
            'AllrecentViewedProduct' => $AllrecentViewedProduct,
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


        $allReview = orderItemsModel::where("product_id", $getProductDetails->first()->id)->where("review", "!=", null)->get();
        $allReviewCount = orderItemsModel::where("product_id", $getProductDetails->first()->id)->where("review", "!=", null)->count();
        $allStarCount = orderItemsModel::where("product_id", $getProductDetails->first()->id)->where("review", "!=", null)->sum("star");





        //recent viewed product
        $productId = $getProductDetails->first()->id;


        $getCookie = Cookie::get('recentViewedProduct');


        if (!$getCookie) {
            $getCookie = "[]";
        }


        $allInfo = json_decode($getCookie, true);
        $allInfo = Arr::prepend($allInfo, $productId);
        $recentProductId = json_encode($allInfo);


        Cookie::queue('recentViewedProduct', $recentProductId, 1000);







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



function categoriesWiseProductPage($categoryId){
    $categoryName = category::where("id",$categoryId)->first()->catagory_name;
    $allProductInfo = productModel::where("category_id", $categoryId)->get();
    return view("frontend.categoriesWiseProductPage",[
            'allProductInfo' => $allProductInfo,
            'categoryName' => $categoryName,
    ]);
}











}
