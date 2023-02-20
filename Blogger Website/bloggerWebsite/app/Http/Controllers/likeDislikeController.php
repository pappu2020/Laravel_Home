<?php

namespace App\Http\Controllers;

use App\Models\likeDislikeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class likeDislikeController extends Controller
{
    function likeCount(Request $req)
    {



        if (likeDislikeModel::where("post_id", $req->post_id_like)->where("user_id", Auth::guard("generaluserLogin")->id())->exists()) {

            return back()->with("liked", "You are already liked this post!!");
        } else {

            $like = 1;


            likeDislikeModel::insertGetId([

                'post_id' => $req->post_id_like,
                'post' => $req->post_id_like_another,
                'user_id' => Auth::guard("generaluserLogin")->id(),
                'like' => $like,
                'created_at' => Carbon::now(),


            ]);

            return back();



            // if (likeDislikeModel::where("post_id", $req->post_id_like)->first()->like != null) {
            //     $like =  $like + 1;
            // } 

            // else {





            //     $liked = likeDislikeModel::select("like")
            //         ->groupBy('like')
            //         ->selectRaw('like, sum(like) as sum')
            //         ->count();

            //     $like = $liked + 1;
            // }

            // likeDislikeModel::find($likeId)->update([
            //     'post_id' => $req->post_id_like,
            //     'user_id' => Auth::guard("generaluserLogin")->id(),



            // ]);



        }
    }



    function likeRemove(Request $req)
    {
        if (likeDislikeModel::where("post_id", $req->post_id_dislike)->where("user_id", Auth::guard("generaluserLogin")->id())->exists()) {

            $userInfo = likeDislikeModel::where("post_id", $req->post_id_dislike)->where("user_id", Auth::guard("generaluserLogin")->id())->first()->id;

            likeDislikeModel::find($userInfo)->delete();

            return back();
        } else {
            return back()->with("dislike", "you did not liked this post");
        }
    }
}
