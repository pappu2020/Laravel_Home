<?php

namespace App\Http\Controllers;

use App\Models\customerLoginModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class customerLoginRegController extends Controller
{
    function customerLoginRegPage(){
        return view("frontend.customerLoginReg");
    }

    function customerRegistration(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:customer_login_models',

            'password' => 'required|confirmed',
            'password' => Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
            'password_confirmation' => 'required',
        ]);

        customerLoginModel::insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password),
            'created_at'=>Carbon::now(),
        ]);

        if (Auth::guard("customerLogin")->attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect('/')->with('customerLoginsuccess', "Login Success!!");
        }
    }


    function customerLogin(Request $req){
        $req->validate([

            'Loginemail' => 'required',

            'Loginpassword' => 'required',
            
        ]);


        if(Auth::guard("customerLogin")->attempt(['email'=>$req->Loginemail,'password'=>$req->Loginpassword])){
           return redirect('/')->with('customerLoginsuccess', "Login Success!!");
        }

        else{
           return redirect()->route("customerLoginRegPage")->with('customerLoginFail',"Email Or Password Not Matched!!");
        }
    }


  function customerLogout(){
        Auth::guard("customerLogin")->logout();
        return redirect('/');

  }














}
