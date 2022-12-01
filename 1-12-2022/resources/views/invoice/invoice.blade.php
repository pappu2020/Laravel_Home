<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>ShowpnoMart-Invoice</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.sparksuite.com/images/logo.png"
                                    style="width: 100%; max-width: 300px" />
                            </td>

                            <td>
                                Invoice :
                                {{ App\Models\orderItemsModel::where('order_id', $orderId)->first()->order_id }}<br />
                                Created:
                                {{ App\Models\orderItemsModel::where('order_id', $orderId)->first()->created_at->format('Y-m-d') }}<br />

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Billing Info:<br>
                                Name:
                                {{ App\Models\BillingAddressModel::where('order_id', $orderId)->first()->name }}<br />
                                Email:
                                {{ App\Models\BillingAddressModel::where('order_id', $orderId)->first()->email }}<br />
                                Mobile:
                                {{ App\Models\BillingAddressModel::where('order_id', $orderId)->first()->phone }}
                            </td>


                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Payment Method: @if (App\Models\ordersBillModel::where('order_id', $orderId)->first()->payment_method == 1)
                        <p>Cash On Delivery</p>
                        <p>Please, payment to the delivery boy on your shipping address.</p>
                    @elseif (App\Models\ordersBillModel::where('order_id', $orderId)->first()->payment_method == 2)
                        <p>SSL COMERZ</p>
                    @else
                        <p>Stripe</p>
                    @endif</td>

            </tr>



            <tr class="heading">
                <td>Item</td>
                <td>Quantity</td>
                <td>Size</td>
                <td>Color</td>

                <td>Price</td>
            </tr>

            @foreach (App\Models\orderItemsModel::where('order_id', $orderId)->get() as $oderItems)
                <tr class="item">
                    <td>{{ $oderItems->rel_to_product->product_name }}</td>
                    <td>{{ $oderItems->quantity }}</td>
                    <td>{{ $oderItems->rel_to_size->SizeName }}</td>
                    <td>{{ $oderItems->rel_to_color->ColorName }}</td>

                    <td>{{ $oderItems->rel_to_product->After_discount }}</td>
                </tr>
            @endforeach


            <tr class="total">


                <td>Sub-total:Tk {{ App\Models\ordersBillModel::where('order_id', $oderItems->order_id)->first()->sub_total }}/-</td>
                    
                

                <td>Discount:Tk {{ App\Models\ordersBillModel::where('order_id', $oderItems->order_id)->first()->Discount }}/-</td>
                   


                <td>Charge:Tk {{ App\Models\ordersBillModel::where('order_id', $oderItems->order_id)->first()->Delivery_charge }}/- </td>
                    
              

                <td>Total:Tk {{ App\Models\ordersBillModel::where('order_id', $oderItems->order_id)->first()->Total_amount }}/-</td>
                   
               



            </tr>


        </table>
    </div>
</body>

</html>
