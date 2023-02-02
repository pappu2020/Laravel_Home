<?php

namespace App\Http\Controllers;

use App\Models\bloggerPostModel;
use App\Models\categoryModel;
use Illuminate\Http\Request;

class bloggerWebsiteController extends Controller
{
    function bloggerWebsitePage(){
        $allCategory = categoryModel::all();
        $allapprovedPost = bloggerPostModel::where("status", "Approved")->take(5)->get();
        return view("bloggerWebsite.bloggerWebsiteHome",[
            'allCategory' => $allCategory,
            'allapprovedPost' => $allapprovedPost,
        ]);
    }
}
