<?php

namespace App\Http\Controllers;

use App\Models\generalUserCommentModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class generalUserCommentController extends Controller
{
    function commentsInsert(Request $req){
        $req->validate([
           'comment' => 'required|max:250',
        ],[
            'comment.required' =>"Please, Enter your comment",
            'comment.max' =>"Maximum length of comment is crossed. please, Enter your comment between 1 to 250 words",
        ]);

        generalUserCommentModel::insert([
            'general_user_id' => Auth::guard("generaluserLogin")->id(),
            'commment' => $req->comment,
            'parent_id' => $req->parent_id,
            'post_id' => $req->post_id,
            'created_at' => Carbon::now(),
        ]);

        return back();
    }
}
