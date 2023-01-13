<?php

namespace App\Http\Controllers;

use App\Models\customerLoginModel;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class githubLoginController extends Controller
{
    function githubRedirect(){
        return Socialite::driver('github')->redirect();
    }
    
    function githubcallback(){
        $user = Socialite::driver('github')->user();

        if(customerLoginModel::where("email", $user->getEmail())->exists()){

            if (Auth::guard("customerLogin")->attempt(['email' => $user->getEmail(), 'password' => "dfdfdfdfdf"])) {

                return redirect('/')->with('customerLoginsuccess', "Login Success!!");
            }

        }

        else{

            customerLoginModel::insert([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt("dfdfdfdfdf"),
                'created_at' => Carbon::now(),
            ]);

            if (Auth::guard("customerLogin")->attempt(['email' => $user->getEmail(), 'password' => "dfdfdfdfdf"])) {

                return redirect('/')->with('customerLoginsuccess', "Login Success!!");
            }

        }
        
    }
}
