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
    function addPostPage()
    {
        $allCategory = categoryModel::all();
        $allTags = tagModel::all();
        return view('author.addPostPage', [
            'allCategory' => $allCategory,
            'allTags' => $allTags,
        ]);
    }



    function bloggerPostInsert(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'categoryName' => 'required|not_in:Select the Category',
            'tagName' => 'required',
            'description' => 'required',
            'featuredImg' => 'required|file|max:5000',
            'featuredImg' => 'mimes:jpg,jpeg,png,gif,webp',
        ]);

        $blogerPostId =  bloggerPostModel::insertGetId([

            'author_id' => Auth::id(),
            'category_id' => $req->categoryName,

            'title' => $req->title,
            'description' => $req->description,
            'slug' => str_replace(" ", "-", Str::lower($req->title)) . '-' . rand(100000, 1999999) . "-" . Auth::User()->name,
            'created_at' => Carbon::now(),

        ]);



        foreach ($req->tagName as $tags) {

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
        $fileName = rand(100000, 1999999) . "-" . Auth::id() . "." . $extension;
        Image::make($getImage)->save(public_path("uploads/blogerPost/" . $fileName));
        Image::make($getImage)->save(public_path("blogger_asset/css/uploads/blogerPost/" . $fileName));


        bloggerPostModel::find($blogerPostId)->update([
            'featured_img' => $fileName,
        ]);


        return back()->with('insertSuccess', "Insert success!!");
    }






    function myPostPage()
    {
        $authorPosts = bloggerPostModel::where("author_id", Auth::id())->where("status", "Approved")->get();
        return view("author.myPostPage", [
            'authorPosts' => $authorPosts,
        ]);
    }
    
    
    
    function myDeclinedPostPage()
    {
        $authorPosts = bloggerPostModel::where("author_id", Auth::id())->where("status", "Declined")->get();
        return view("author.myDeclinedPostPage", [
            'authorPosts' => $authorPosts,
        ]);
    }




    function viewPostForApproved($postid){
        $authorPosts = bloggerPostModel::where("id", $postid)->get();
        return view("admin.bloggerPost.viewPostForApproved",[
            'authorPosts' => $authorPosts,
        ]);
    }



    //delete

    function myPostDelete($delete_id)
    {



        bloggerPostModel::find($delete_id)->delete();
        return back()->with("deleteSuccess", "Delete Success!");
    }


    function myPostTrashBin()
    {
        $postTrashData = bloggerPostModel::onlyTrashed()->get();
        return view("author.myPostTrashBin", [
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

        $findPhoto = bloggerPostModel::onlyTrashed()->where("id", $delete_id)->first()->featured_img;
        $delete_pic_uploads = public_path('uploads/blogerPost/' . $findPhoto);
        $delete_pic_css = public_path("blogger_asset/css/uploads/blogerPost/" . $findPhoto);
        unlink($delete_pic_uploads);
        unlink($delete_pic_css);

        bloggerPostModel::onlyTrashed()->find($delete_id)->forceDelete();
        return back()->with("deleteSuccess", "Delete Success!");
    }


    //update

    function myPostUpdatePage($update_id)
    {
        $bloggerPostInfo = bloggerPostModel::where("id", $update_id)->get();
        $allCategory = categoryModel::all();
        $allTags = tagModel::all();

        return view("author.myPostUpdatePage", [
            'bloggerPostInfo' => $bloggerPostInfo,
            'allCategory' => $allCategory,
            'allTags' => $allTags,
        ]);
    }


    function myPostUpdate(Request $req)
    {


        $req->validate([
            'title' => 'required',
            'categoryName' => 'required|not_in:Select the Category',
            'tagName' => 'required',
            'description' => 'required',
            'featuredImg' => 'required|file|max:5000',
            'featuredImg' => 'mimes:jpg,jpeg,png,gif,webp',
        ]);


        if ($req->featuredImg == "") {
            bloggerPostModel::find($req->blogId)->update([


                'author_id' => Auth::id(),
                'category_id' => $req->categoryName,

                'title' => $req->title,
                'description' => $req->description,
                'slug' => str_replace(" ", "-", Str::lower($req->title)) . '-' . rand(100000, 1999999) . "-" . Auth::User()->name,
                'created_at' => Carbon::now(),



            ]);


            foreach ($req->tagName as $tags) {

                tagPostModel::where("post_id", $req->blogId)->update([
                    'tag_id' => $tags,
                    'post_id' => $req->blogId,
                    'created_at' => Carbon::now(),
                ]);
            }
            return back()->with('updateSuccess', "update success!!");
        } else {
            $findPhoto = bloggerPostModel::where("id", $req->blogId)->first()->featured_img;
            $delete_pic = public_path('uploads/blogerPost/' . $findPhoto);
            $delete_pic = public_path("blogger_asset/css/uploads/blogerPost/" . $findPhoto);
            unlink($delete_pic);



            $getImage = $req->featuredImg;

            $extension = $getImage->getClientOriginalExtension();

            // $afterName = str_replace(" ", "-", $req->title);

            // $fileName = Str::lower($afterName) . '-' . rand(100000, 1999999) ."-".Auth::id(). "." . $extension;
            $fileName = rand(100000, 1999999) . "-" . Auth::id() . "." . $extension;
            Image::make($getImage)->save(public_path("uploads/blogerPost/" . $fileName));
            Image::make($getImage)->save(public_path("blogger_asset/css/uploads/blogerPost/" . $fileName));


            bloggerPostModel::find($req->blogId)->update([

                'category_id' => $req->categoryName,

                'title' => $req->title,
                'description' => $req->description,
                'slug' => str_replace(" ", "-", Str::lower($req->title)) . '-' . rand(100000, 1999999) . "-" . Auth::User()->name,
                'featured_img' => $fileName,
                'created_at' => Carbon::now(),

            ]);


            foreach ($req->tagName as $tags) {

                tagPostModel::where("post_id", $req->blogId)->update([
                    'tag_id' => $tags,
                    'post_id' => $req->blogId,
                    'created_at' => Carbon::now(),
                ]);
            }


            return back()->with('updateSuccess', "update success!!");
        }
    }




    function uploadedbloggerPostPage()
    {
        $allBloggerPost = bloggerPostModel::latest()->get();
        return view("admin.bloggerPost.uploadedbloggerPostPage", [
            'allBloggerPost' => $allBloggerPost,
        ]);
    }


    function uploadedbloggerPostStatus(Request $req)
    {

        $explode_part = explode(",", $req->stutusButton);



        bloggerPostModel::where("id", $explode_part[0])->update([
            'status' => $explode_part[1],
        ]);

        return back()->with('updateSuccess', "update success!!");
    }
}
