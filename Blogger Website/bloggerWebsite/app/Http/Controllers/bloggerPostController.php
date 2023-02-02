<?php

namespace App\Http\Controllers;

use App\Models\bloggerPostModel;
use App\Models\categoryModel;
use App\Models\tagModel;
use App\Models\tagPostModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class bloggerPostController extends Controller
{
    function addPostPage(){
        $allCategory = categoryModel::all();
        $allTags = tagModel::all();
        return view('author.addPostPage',[
            'allCategory' => $allCategory,
            'allTags' => $allTags,
        ]);
    }



    function bloggerPostInsert(Request $req){
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'featuredImg' => 'required|file|max:5000',
            'featuredImg' => 'mimes:jpg,jpeg,png,gif',
        ]);

        $blogerPostId =  bloggerPostModel::insertGetId([

            'author_id' => Auth::id(),
            'category_id' => $req->categoryName,
            
            'title' => $req->title,
            'description' => $req->description,
            'slug' => str_replace(" ", "-", Str::lower($req->title)) . '-' . rand(100000, 1999999) . "-" . Auth::User()->name,
            'created_at' => Carbon::now(),

        ]);


        
        foreach($req->tagName as $tags){

            tagPostModel::insert([
            'tag_id' => $tags,
            'post_id' => $blogerPostId,
            'created_at' => Carbon::now(),
        ]);

        }
        
        
        


        $getImage = $req->featuredImg;

        $extension = $getImage->getClientOriginalExtension();

        // $afterName = str_replace(" ", "-", $req->title);

        // $fileName = Str::lower($afterName) . '-' . rand(100000, 1999999) ."-".Auth::id(). "." . $extension;
        $fileName =rand(100000, 1999999) ."-".Auth::id(). "." . $extension;
        Image::make($getImage)->save(public_path("uploads/blogerPost/" . $fileName));


        bloggerPostModel::find($blogerPostId)->update([
            'featured_img' => $fileName,
        ]);


        return back()->with('insertSuccess', "Insert success!!");
    }






    function myPostPage(){
        $authorPosts = bloggerPostModel::where("author_id",Auth::id())->get();
        return view("author.myPostPage",[
            'authorPosts' => $authorPosts,
        ]);
    }



    //delete

    function myPostDelete($delete_id){

        bloggerPostModel::find($delete_id)->delete();
        return back()->with("deleteSuccess", "Delete Success!");

    }


    function myPostTrashBin(){
        $postTrashData = bloggerPostModel::onlyTrashed()->get();
        return view("author.myPostTrashBin",[
            'postTrashData' => $postTrashData,
        ]);
    }


    function myPostRestore($delete_id)
    {

        bloggerPostModel::onlyTrashed()->find($delete_id)->restore();
        return back()->with("restoreSuccess", "Restore Success!");
    }
    
    
    function myPostParmanantDelete($delete_id)
    {
        
        

        bloggerPostModel::onlyTrashed()->find($delete_id)->forceDelete();
        return back()->with("deleteSuccess", "Delete Success!");
    }
}
