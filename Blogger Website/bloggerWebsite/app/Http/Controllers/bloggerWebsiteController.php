<?php

namespace App\Http\Controllers;

use App\Models\bloggerPostModel;
use App\Models\categoryModel;
use App\Models\generalUserCommentModel;
use App\Models\likeDislikeModel;
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
        $bloggerInfo = bloggerPostModel::where("slug",$blog_id)->get();

        $allComments = generalUserCommentModel::with('rel_to_replies')->where("post_id", $bloggerInfo->first()->id)->where("parent_id",null)->get();
        $allCommentscount = generalUserCommentModel::with('rel_to_replies')->where("post_id", $bloggerInfo->first()->id)->get();

        $allLikes = likeDislikeModel::where("post_id", $bloggerInfo->first()->slug)->count();
        
        return view("bloggerWebsite.bloggerDetailsPage",[
            'bloggerInfo' => $bloggerInfo,
            'allComments' => $allComments,
            'allCommentscount' => $allCommentscount,
            'allLikes' => $allLikes,
        ]);
    }


    function authorPage($author_id){
        $bloggerInfo = bloggerPostModel::where("author_id", $author_id)->where("status","Approved")->paginate(4);
        $allCategory = categoryModel::all();
        $allTag = tagModel::all();
        return view("bloggerWebsite.authorPage",[
            'bloggerInfo' => $bloggerInfo,
            'allCategory' => $allCategory,
            'allTag' => $allTag,
        ]);
    }


    function bloggerSiteblogPage(){
        $bloggerInformation = bloggerPostModel::where("status","Approved")->paginate(6);
        
      
        return view("bloggerWebsite.bloggerSiteblogPage",[
            'bloggerInformation' => $bloggerInformation,
        ]);
    }


    function bloggerSiteauthorPage(){
        $bloggerInformation = bloggerPostModel::select("author_id")
        ->groupBy('author_id')
        ->selectRaw('author_id, sum(author_id) as sum')
        ->get();
        return view("bloggerWebsite.bloggerSiteauthorPage",[
            'bloggerInformation' => $bloggerInformation,
        ]);
    }

  
}
