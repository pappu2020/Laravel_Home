<?php

namespace App\Http\Controllers;

use DB;

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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }

    public function index(Request $request)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "sslorders"
        # In "sslorders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $customerAllInfo = session("customer_order_info");
        $totalAmount = $customerAllInfo["totalAmountForCartPage"] + $customerAllInfo["charge"];

        $post_data = array();
        $post_data['total_amount'] = $totalAmount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('sslorders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $customerAllInfo["billName"],
                'email' => $customerAllInfo["billEmail"],
                'phone' => $customerAllInfo["billMobile"],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $customerAllInfo["billAddress"],
                'transaction_id' => $post_data['tran_id'],
                'customer_id' => $customerAllInfo['customer_id'],
                'billCompany' =>$customerAllInfo['billCompany'],
                'billCountry' => $customerAllInfo['billCountry'],
                'billCity' => $customerAllInfo['billCity'],
                'billZip' => $customerAllInfo['billZip'],
                'billAdditionalInfo' => $customerAllInfo['billAdditionalInfo'],
                'charge' => $customerAllInfo['charge'],
                'payment_method' => $customerAllInfo['payment_method'],
                'totalAmountForCartPage' =>$customerAllInfo['totalAmountForCartPage'],
                'subTotalAmountForCartPage' => $customerAllInfo['subTotalAmountForCartPage'],
                'discountForCartPage' => $customerAllInfo['discountForCartPage'],
                'payment_method' => $customerAllInfo['payment_method'],
                'created_at' => Carbon::now(),
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function payViaAjax(Request $request)
    {

        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "sslorders"
        # In sslorders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = '10'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('sslorders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function success(Request $request)
    {


        $order_id = "showpnoMart" . "-" . Carbon::now()->format('Y-m-d') . "-" . rand(9999999999, 1000000000);
        $tran_id = $request->input('tran_id');
        $customerAllData =  sslorders::where("transaction_id",$tran_id)->get();


        ordersBillModel::insert([
            'order_id' => $order_id,
            'customer_id' =>  $customerAllData->first()->customer_id,
            'sub_total' => $customerAllData->first()->subTotalAmountForCartPage,
            'Discount' => $customerAllData->first()->discountForCartPage,
            'Delivery_charge' =>$customerAllData->first()->charge,
            'Total_amount' => $customerAllData->first()->totalAmountForCartPage +$customerAllData->first()->charge,
            'payment_method' =>$customerAllData->first()->payment_method,
            'created_at' => Carbon::now(),
        ]);


        BillingAddressModel::insert([
            'order_id' => $order_id,
            'customer_id' => $customerAllData->first()->customer_id,
            'name' =>  $customerAllData->first()->name,
            'email' =>$customerAllData->first()->email,
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

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('sslorders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('sslorders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('sslorders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('sslorders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }
    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('sslorders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('sslorders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "Transaction is successfully Completed";
                }
            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }
}
