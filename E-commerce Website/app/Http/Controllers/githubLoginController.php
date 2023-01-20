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
        $users = Socialite::driver('github')->user();

        if(customerLoginModel::where("email", $users->getEmail())->exists()){

            if (Auth::guard("customerLogin")->attempt(['email' => $users->getEmail(), 'password' => '123@abc'])) {

                return redirect('/')->with('customerLoginsuccess', "Login Success!!");
            }

        }

        else{

            customerLoginModel::insert([
                'name' => $users->getName(),
                'email' => $users->getEmail(),
                'password' => bcrypt("123@abc"),
                'created_at' => Carbon::now(),
            ]);

            if (Auth::guard("customerLogin")->attempt(['email' => $users->getEmail(), 'password' => '123@abc'])) {

                return redirect('/')->with('customerLoginsuccess', "Login Success!!");
            }

        }
        
    }
}
