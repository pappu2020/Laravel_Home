<?php

namespace App\Http\Controllers;

use App\Models\bloggerPostModel;
use Illuminate\Http\Request;

class searchController extends Controller
{
    function searchpage(Request $req){


       




        $data = $req->all();







        $allProductInfo = bloggerPostModel::where(function ($q) use ($data) {

           

           

            if (!empty($data['q']) && $data['q'] != '' && $data['q'] != 'undefined') {
                $q->where(function ($q) use ($data) {

                    $q->where('title', 'like', '%' . $data['q'] . '%');
                    $q->Orwhere('short_desp', 'like', '%' . $data['q'] . '%');
                    $q->Orwhere('description', 'like', '%' . $data['q'] . '%');
                });
            }


           

            



        })->get();

        return view("bloggerWebsite.searchpage",[
            'allProductInfo' => $allProductInfo,
        ]);
    }
}
