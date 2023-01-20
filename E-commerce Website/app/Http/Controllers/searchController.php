<?php

namespace App\Http\Controllers;

use App\Models\addColorModel;
use App\Models\addSizeModel;
use App\Models\brandModel;
use App\Models\category;
use App\Models\productModel;
use Illuminate\Http\Request;

class searchController extends Controller
{
    function searchPage(Request $req)
    {

        $sorting = "created_at";
        $type = "DESC";




        $data = $req->all();


        if (!empty($data['sorting']) && $data['sorting'] != '' && $data['sorting'] != 'undefined') {
            if ($data['sorting'] == 1) {
                $sorting = "product_name";
                $type = "ASC";
            }
            elseif ($data['sorting'] == 2) {
                $sorting = "product_name";
                $type = "DESC";
            } 
            elseif ($data['sorting'] == 3) {
                $sorting = "After_discount";
                $type = "ASC";
            } 
            
            elseif ($data['sorting'] == 4) {
                $sorting = "After_discount";
                $type = "DESC";
            }
        }





        $allProductInfo = productModel::where(function ($q) use ($data) {

            $min = 0;

            if (!empty($data['min']) && $data['min'] != '' && $data['min'] != 'undefined') {
                $min = $data['min'];
            } else {
                $min = 1;
            }

            if (!empty($data['q']) && $data['q'] != '' && $data['q'] != 'undefined') {
                $q->where(function ($q) use ($data) {

                    $q->where('product_name', 'like', '%' . $data['q'] . '%');
                    $q->Orwhere('product_Short_desp', 'like', '%' . $data['q'] . '%');
                    $q->Orwhere('product_Long_desp', 'like', '%' . $data['q'] . '%');
                });
            }


            if (!empty($data['min']) && $data['min'] != '' && $data['min'] != 'undefined' || !empty($data['max']) && $data['max'] != '' && $data['max'] != 'undefined') {

                $q->whereBetween('After_discount', [$min, $data['max']]);
            }

            if (!empty($data['categoryInfo']) && $data['categoryInfo'] != '' && $data['categoryInfo'] != 'undefined') {

                $q->where('category_id', [$data['categoryInfo']]);
            }

            if (!empty($data['color']) && $data['color'] != '' && $data['color'] != 'undefined' || !empty($data['size']) && $data['size'] != '' && $data['size'] != 'undefined') {

                $q->whereHas("rel_to_Inventory", function ($q) use ($data) {
                    if (!empty($data['color']) && $data['color'] != '' && $data['color'] != 'undefined') {
                        $q->whereHas("rel_to_color", function ($q) use ($data) {
                            $q->where("add_color_models.id", $data['color']);
                        });
                    }

                    if (!empty($data['size']) && $data['size'] != '' && $data['size'] != 'undefined') {
                        $q->whereHas("rel_to_size", function ($q) use ($data) {
                            $q->where("add_size_models.id", $data['size']);
                        });
                    }
                });
            }



            if (!empty($data['brands']) && $data['brands'] != '' && $data['brands'] != 'undefined') {

                $q->where('product_Brand', [$data['brands']]);
            }



        })->orderBy($sorting, $type)->get();

        $allCategoryInfo = category::all();
        $allColor = addColorModel::all();
        $allSize = addSizeModel::all();
        $allBrand = brandModel::all();
        return view("frontend.searchPage", [
            'allProductInfo' => $allProductInfo,
            'allCategoryInfo' => $allCategoryInfo,
            'allColor' => $allColor,
            'allSize' => $allSize,
            'allBrand' => $allBrand,
        ]);
    }
}
