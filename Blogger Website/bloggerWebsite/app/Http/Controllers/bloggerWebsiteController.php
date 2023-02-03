<?php

namespace App\Http\Controllers;

use App\Models\bloggerPostModel;
use App\Models\categoryModel;
use App\Models\tagModel;
use Illuminate\Http\Request;

class bloggerWebsiteController extends Controller
{
    function bloggerWebsitePage()
    {
        $allCategory = categoryModel::all();
        $allapprovedPost = bloggerPostModel::latest()->where("status", "Approved")->take(5)->get();
        $allRecentArticles = bloggerPostModel::latest()->where("status", "Approved")->take(9)->get();
        $allTag = tagModel::all();
        return view("bloggerWebsite.bloggerWebsiteHome", [
            'allCategory' => $allCategory,
            'allapprovedPost' => $allapprovedPost,
            'allRecentArticles' => $allRecentArticles,
            'allTag' => $allTag,
        ]);
    }


  
}
