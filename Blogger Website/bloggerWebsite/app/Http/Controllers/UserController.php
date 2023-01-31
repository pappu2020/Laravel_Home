<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function userListPage(){
        $allUserList = User::where("email","!=",Auth::User()->email)->get();
        $allUserCount = User::count();
        return view("admin.user.userListPage",[
            'allUserList' => $allUserList,
            'allUserCount' => $allUserCount,
        ]);
    }


    function userDelete($userId){
       User::find($userId)->delete();

       return back();
    }


    function trashUserPage(){
        $allTrashInfo = User::onlyTrashed()->get();
        return view("admin.user.trashUserPage",[
            'allTrashInfo' => $allTrashInfo,
        ]);
    }


    function userParDelete($userId){

        User::onlyTrashed()->find($userId)->forceDelete();

        return back();

    }
    
    
    function userRestore($userId){

        User::onlyTrashed()->find($userId)->restore();

        return back();

    }


    function deleteCheckedUsers(Request $req){
        foreach($req->check as $checkedUsers){
            User::find($checkedUsers)->delete();
        }

        return back()->with("deleteSuccess","Delete Success!");
    }
}
