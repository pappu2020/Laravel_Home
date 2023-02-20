<?php

namespace App\Http\Controllers;

use App\Models\likeDislikeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class likeDislikeController extends Controller
{
    function likeCount(Request $req)
    {



        if (likeDislikeModel::where("post_id", $req->post_id_like)->where("user_id", Auth::guard("generaluserLogin")->id())->exists()) {

            return back()->with("liked","You are already liked this post!!");
        } else {

            $like = 0;


            $likeId = likeDislikeModel::insertGetId([

                'post_id' => $req->post_id_like,
                'user_id' => Auth::guard("generaluserLogin")->id(),

            ]);



            if (likeDislikeModel::where("post_id", $req->post_id_like)->first()->like == null) {
                $like =  $like + 1;
            } else {
                // $like = likeDislikeModel::where("post_id", $req->post_id_like)->first()->like->sum();




                $liked = likeDislikeModel::select("like")
                    ->groupBy('like')
                    ->selectRaw('like, sum(like) as sum')
                    ->count();

                $like = $liked + 1;
            }

            likeDislikeModel::find($likeId)->update([
                'post_id' => $req->post_id_like,
                'user_id' => Auth::guard("generaluserLogin")->id(),

                'like' => $like,

            ]);

            return back();
        }
    }
}
