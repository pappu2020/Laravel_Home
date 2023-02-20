<?php

namespace App\Http\Controllers;

use App\Models\newsletterModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class newsletterController extends Controller
{
    function insertNewsletter(Request $req){
        newsletterModel::insert([
            'userId' => Auth::guard("generaluserLogin")->id(),
            'email' => $req->newsletter,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('newsletter',"submitted");
    }
}
