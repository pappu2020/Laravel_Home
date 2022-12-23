<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use App\Models\customerLoginModel;
use App\Models\customerPassResetModel;
use App\Notifications\customerPassReset;
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




function customerPassResetForm(){
    return view("frontend.customerPassResetForm");
}


function customerPassResetStore(Request $req){
   $cutomer_mail = customerLoginModel::where("email",$req->Resetemail)->firstOrFail();
   customerPassResetModel::where("customer_id", $cutomer_mail->id)->delete();
   $passResetData=customerPassResetModel::create([
         'customer_id' => $cutomer_mail->id,
         'token' => uniqid(),
         'created_at' => Carbon::now(),
   ]);

    Notification::send($cutomer_mail, new customerPassReset($passResetData));


   return back()->with("passResetLinkSuccess","We have sent a password reset link to your email.Please, Check your account");
}


function customerPassChangeForm($tokenId){
    return view("frontend.customerPassChangePage",[
        'tokenInfo' => $tokenId,
    ]);
}


function customerPassChange(Request $req){

    $customerInfo = customerPassResetModel::where("token",$req->tokenInfoId)->firstOrFail();

      
            customerLoginModel::find($customerInfo->customer_id)->update([
                "password" => Hash::make($req->password),
            ]);
            return back()->with('New_pass_update_success', 'Password Update success!!');
        

}






}
