<?php

namespace App\Http\Controllers;

use App\Models\customerLoginModel;
use App\Models\orderItemsModel;
use App\Models\ordersBillModel;
use App\Models\wishlistModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class customerProfileController extends Controller
{
    function customerProfile()
    {
        $allcustomerInfo = customerLoginModel::where("id", Auth::guard("customerLogin")->id())->get();
        return view("frontend.profile", [
            'allcustomerInfo' => $allcustomerInfo,
        ]);
    }

    function customerProfileUpdate(Request $req)
    {
        if ($req->password == "") {

            if ($req->profileImg == "") {

                // customerLoginModel::where("id", Auth::guard("customerLogin")->id())->update([

                //     'name' => $req->name,
                //     'email' => $req->email,
                //     'country' => $req->country,
                //     'address' => $req->address,

                // ]);


                customerLoginModel::find(Auth::guard("customerLogin")->id())->update([
                    'name' => $req->name,
                    'email' => $req->email,
                    'country' => $req->country,
                    'address' => $req->address,
                    
                ]);
                return back();
            } else {
                $upload_img = $req->profileImg;
                if (Auth::guard("customerLogin")->user()->photo == null) {
                    $extension = $upload_img->getClientOriginalExtension();
                    $fileName = Auth::guard("customerLogin")->user()->name . "-" . rand(999999, 1000000) . $extension;



                    Image::make($upload_img)->resize(300, 200)->save(public_path('uploads/CustomerProfile/' . $fileName));

                    customerLoginModel::find(Auth::guard("customerLogin")->id())->update([
                        'name' => $req->name,
                        'email' => $req->email,
                        'country' => $req->country,
                        'address' => $req->address,
                        'photo' => $fileName,
                    ]);

                    // customerLoginModel::where("id", Auth::guard("customerLogin")->id())->update([

                    //     'name' => $req->name,
                    //     'email' => $req->email,
                    //     'country' => $req->country,
                    //     'address' => $req->address,
                    //     'photo' => $fileName,

                    // ]);
                    return back();
                } else {
                    $delete_pic = public_path('uploads/CustomerProfile/' . Auth::guard("customerLogin")->user()->photo);
                    unlink($delete_pic);

                    $extension = $upload_img->getClientOriginalExtension();
                    $fileName = Auth::guard("customerLogin")->user()->name . "-" . rand(999999, 1000000) . $extension;



                    Image::make($upload_img)->resize(300, 200)->save(public_path('uploads/CustomerProfile/' . $fileName));



                    customerLoginModel::find(Auth::guard("customerLogin")->id())->update([
                        'name' => $req->name,
                        'email' => $req->email,
                        'country' => $req->country,
                        'address' => $req->address,
                        'photo' => $fileName,
                    ]);
                    
                    
                    // customerLoginModel::where("id", Auth::guard("customerLogin")->id())->update([

                    //     'name' => $req->name,
                    //     'email' => $req->email,
                    //     'country' => $req->country,
                    //     'address' => $req->address,
                    //     'photo' => $fileName,

                    // ]);
                    return back();
                }
            }
        } else {

            // $req->validate([

            //     'password' => Password::min(8)
            //         ->letters()
            //         ->mixedCase()
            //         ->numbers()
            //         ->symbols(),

            // ],);
           
            if (Hash::check($req->current_password, Auth::guard("customerLogin")->user()->password)) {
                


               customerLoginModel::find(Auth::guard("customerLogin")->id())->update([
                 "password"=>bcrypt($req->password),
               ]);
                return back('pass_update_success', 'Password Update Success!!');
                
                
                
            } else {
                return back()->with('pass_update_fail', 'Password does not matched!!');
            }
        }
    }



//Customer order page

function customerOrderPage(){
    $allcustomerInfo = customerLoginModel::where("id", Auth::guard("customerLogin")->id())->get();
    // $OrderItemsGet = orderItemsModel::where("customer_id",Auth::guard("customerLogin")->id())->get();
    $OrderItemsBillsGet = ordersBillModel::where("customer_id",Auth::guard("customerLogin")->id())->latest()->get();
   
    return view("frontend.customerOrderPage",[
            'allcustomerInfo' => $allcustomerInfo,
            // 'OrderItemsGet' => $OrderItemsGet,
            'OrderItemsBillsGet' => $OrderItemsBillsGet,
            
    ]);
}


function customerWishlistPage(){
        $allcustomerInfo = customerLoginModel::where("id", Auth::guard("customerLogin")->id())->get();
    $allcustomerWishlistInfo = wishlistModel::where("customer_id", Auth::guard("customerLogin")->id())->get();
    // $OrderItemsGet = orderItemsModel::where("customer_id",Auth::guard("customerLogin")->id())->get();
  
   
    return view("frontend.customerWishlist",[
            'allcustomerWishlistInfo' => $allcustomerWishlistInfo,
            'allcustomerInfo' => $allcustomerInfo,
    ]);
}














}
