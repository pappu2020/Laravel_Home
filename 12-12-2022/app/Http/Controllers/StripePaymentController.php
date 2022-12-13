<?php

namespace App\Http\Controllers;

use App\Models\Stripeorders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\sslorders;


use App\Mail\invoiceMail;
use App\Models\addInventoryModel;
use App\Models\BillingAddressModel;
use App\Models\cartModel;
use App\Models\cities;
use App\Models\countries;
use App\Models\orderItemsModel;
use App\Models\ordersBillModel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
       

        $customerAllInfo = session("customer_order_info");
       
        $totalAmount = $customerAllInfo["totalAmountForCartPage"] + $customerAllInfo["charge"];


        $stripeId = Stripeorders::insertGetId([


            'name' => $customerAllInfo["billName"],
            'email' => $customerAllInfo["billEmail"],
            'phone' => $customerAllInfo["billMobile"],
           
            
            'address' => $customerAllInfo["billAddress"],
            
            'customer_id' => $customerAllInfo['customer_id'],
            'billCompany' => $customerAllInfo['billCompany'],
            'billCountry' => $customerAllInfo['billCountry'],
            'billCity' => $customerAllInfo['billCity'],
            'billZip' => $customerAllInfo['billZip'],
            'billAdditionalInfo' => $customerAllInfo['billAdditionalInfo'],
            'charge' => $customerAllInfo['charge'],
            'payment_method' => $customerAllInfo['payment_method'],
            'totalAmountForCartPage' =>  $totalAmount,
            'subTotalAmountForCartPage' => $customerAllInfo['subTotalAmountForCartPage'],
            'discountForCartPage' => $customerAllInfo['discountForCartPage'],
            'payment_method' => $customerAllInfo['payment_method'],
            'created_at' => Carbon::now(),

        ]);





        return view("frontend.stripe",[
            'totalAmount' => $totalAmount,
            'stripeId' => $stripeId,
             
        ]);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
           
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        $order_id = "showpnoMart" . "-" . Carbon::now()->format('Y-m-d') . "-" . rand(9999999999, 1000000000);
  
        $customerAllData =  Stripeorders::where("id", $request->stripeId)->get();


        ordersBillModel::insert([
            'order_id' => $order_id,
            'customer_id' =>  $customerAllData->first()->customer_id,
            'sub_total' => $customerAllData->first()->subTotalAmountForCartPage,
            'Discount' => $customerAllData->first()->discountForCartPage,
            'Delivery_charge' => $customerAllData->first()->charge,
            'Total_amount' => $customerAllData->first()->totalAmountForCartPage + $customerAllData->first()->charge,
            'payment_method' => $customerAllData->first()->payment_method,
            'created_at' => Carbon::now(),
        ]);


        BillingAddressModel::insert([
            'order_id' => $order_id,
            'customer_id' => $customerAllData->first()->customer_id,
            'name' =>  $customerAllData->first()->name,
            'email' => $customerAllData->first()->email,
            'phone' => $customerAllData->first()->phone,
            'company' => $customerAllData->first()->billCompany,
            'Address' => $customerAllData->first()->address,
            'Zip' => $customerAllData->first()->billZip,
            'country_id' => $customerAllData->first()->billCountry,
            'city_id' => $customerAllData->first()->billCity,
            'notes' => $customerAllData->first()->billAdditionalInfo,
            'created_at' => Carbon::now(),

        ]);



        $cartsInfo = cartModel::where("customer_id", $customerAllData->first()->customer_id)->get();


        foreach ($cartsInfo  as $carts) {

            orderItemsModel::insert([
                'order_id' => $order_id,
                'customer_id' =>  $customerAllData->first()->customer_id,
                'product_id' => $carts->product_id,
                'price' => $carts->rel_to_product->After_discount,
                'color' => $carts->color_id,
                'size' => $carts->size_id,
                'quantity' => $carts->Quantity,
                'created_at' => Carbon::now(),
            ]);



            if (addInventoryModel::where("product_id", $carts->product_id)->where("Color_id", $carts->color_id,)->where("size_id", $carts->size_id,)->first()->Quantity > 0) {
                addInventoryModel::where("product_id", $carts->product_id)->where("Color_id", $carts->color_id,)->where("size_id", $carts->size_id,)->decrement("Quantity", $carts->Quantity);
            } else {
                return redirect()->route("productDetails")->with("quantity_zero", "0");
            }
        }

        // Mail::to($req->billEmail)->send(new invoiceMail($order_id));

        //     $url = "https://bulksmsbd.net/api/smsapi";
        //     $api_key = "{i5fKe1NZdlNWvbQZ3Fqf}";
        //     $senderid = "{pappu2022}";
        //     $number = "88016xxxxxxxx,88019xxxxxxxx";
        //     $message = "Congratualations!! Your order no.". $order_id ."has been successfully Placed please ready".$req->totalAmountForCartPage + $req->charge."for received product";
        //      
        //     $data=[
        //         "api_key" => $api_key,
        //         "senderid" => $senderid,
        //         "number" => $number,
        //         "message" => $message
        //     ];
        //     $ch = curl_init();
        //     curl_setopt($ch, CURLOPT_URL, $url);
        //     curl_setopt($ch, CURLOPT_POST, 1);
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //     $response = curl_exec($ch);
        //     curl_close($ch);
        //     return $response;
        cartModel::where("customer_id", $customerAllData->first()->customer_id)->delete();
        return redirect()->route("orderSuccessRoute")->with("orderSuccess", $order_id);


        // echo "Transaction is Successful";

        // $tran_id = $request->input('tran_id');
        // $amount = $request->input('amount');
        // $currency = $request->input('currency');

        // $sslc = new SslCommerzNotification();

        // #Check order status in order tabel against the transaction id or order id.
        // $order_detials = DB::table('sslorders')
        //     ->where('transaction_id', $tran_id)
        //     ->select('transaction_id', 'status', 'currency', 'amount')->first();

        // if ($order_detials->status == 'Pending') {
        //     $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

        //     if ($validation) {
        //         /*
        //         That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
        //         in order table as Processing or Complete.
        //         Here you can also sent sms or email for successfull transaction to customer
        //         */
        //         $update_product = DB::table('sslorders')
        //             ->where('transaction_id', $tran_id)
        //             ->update(['status' => 'Processing']);

        //         echo "<br >Transaction is successfully Completed";
        //     }
        // } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
        //     /*
        //      That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
        //      */
        //     echo "Transaction is successfully Completed";
        // } else {
        //     #That means something wrong happened. You can redirect customer to your product page.
        //     echo "Invalid Transaction";
        // }
    }
}
