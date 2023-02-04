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
        $allRecentArticles = bloggerPostModel::latest()->where("status", "Approved")->take(5)->paginate(5);
        $allTag = tagModel::all();
        return view("bloggerWebsite.bloggerWebsiteHome", [
            'allCategory' => $allCategory,
            'allapprovedPost' => $allapprovedPost,
            'allRecentArticles' => $allRecentArticles,
            'allTag' => $allTag,
        ]);
    }
   


    function bloggerDetailsPage($blog_id){
        $bloggerInfo = bloggerPostModel::where("id",$blog_id)->get();
        
        return view("bloggerWebsite.bloggerDetailsPage",[
            'bloggerInfo' => $bloggerInfo,
        ]);
    }


    function authorPage($author_id){
        $bloggerInfo = bloggerPostModel::where("author_id", $author_id)->where("status","Approved")->get();
        $allCategory = categoryModel::all();
        $allTag = tagModel::all();
        return view("bloggerWebsite.authorPage",[
            'bloggerInfo' => $bloggerInfo,
            'allCategory' => $allCategory,
            'allTag' => $allTag,
        ]);
    }

  
}
