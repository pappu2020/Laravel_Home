@extends('frontend.master')


@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Support</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= Product Detail ======================== -->
    <section class="middle">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center d-block mb-5">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 col-md-12">
                    <form method="POST" action="{{ route('checkoutFormInsert') }}">
                        @csrf
                        <h5 class="mb-4 ft-medium">Billing Details</h5>
                        <div class="row mb-2">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Full Name *</label>
                                    <input type="text" class="form-control" name="billName" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Email *</label>
                                    <input type="email" class="form-control" name="billEmail" placeholder="Email" />
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Company</label>
                                    <input type="text" class="form-control" name="billCompany"
                                        placeholder="Company Name (optional)" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Mobile Number *</label>
                                    <input type="number" class="form-control" name="billMobile"
                                        placeholder="Mobile Number" />
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Address *</label>
                                    <input type="text" class="form-control" name="billAddress" placeholder="Address" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Country *</label>
                                    <select class="custom-select" name="billCountry" id="billCountry">
                                        <option value="" selected>-- Select Country --</option>
                                        @foreach ($Allcountry as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="text-dark">City *</label>
                                    <select class="custom-select" name="billCity" id="billCity">
                                        <option value="">-- Select City --</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="text-dark">ZIP / Postcode *</label>
                                    <input type="text" class="form-control" name="billZip"
                                        placeholder="Zip / Postcode" />
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="text-dark">Additional Information</label>
                                    <textarea class="form-control ht-50" name="billAdditionalInfo"></textarea>
                                </div>
                            </div>

                        </div>


                </div>

                <!-- Sidebar -->
                <div class="col-12 col-lg-4 col-md-12">
                    <div class="d-block mb-3">
                        <h5 class="mb-4">Order Items ({{ $allCartCount }})</h5>
                        <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">


                            @foreach ($allCartInfo as $CartInfo)
                                <li class="list-group-item">

                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <!-- Image -->
                                            <a href="{{route("productDetails",$CartInfo->rel_to_product->slug)}}"><img
                                                    src="{{ asset('uploads/products/preview') }}/{{ $CartInfo->rel_to_product->product_preview_img }}"
                                                    alt="..." class="img-fluid"></a>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <div class="cart_single_caption pl-2">
                                                <h4 class="product_title fs-md ft-medium mb-1 lh-1">
                                                    {{ $CartInfo->rel_to_product->product_name }}</h4>
                                                <p class="mb-1 lh-1"><span class="text-dark">Size:
                                                        {{ $CartInfo->rel_to_size->SizeName }}</p>
                                                <p class=""><span class="text-dark">Color:
                                                        @if ($CartInfo->color_id == null)
                                                            color Not Available
                                                        @else
                                                            Size: {{ $CartInfo->rel_to_color->ColorName }}
                                                        @endif</span></p>
                                                <p class="mb-3 lh-1"><span class="text-dark">Quantity:
                                                        {{ $CartInfo->Quantity }}</span></p>
                                                <h4 class="fs-md ft-medium mb-3 lh-1">Tk
                                                    {{ $CartInfo->rel_to_product->After_discount }} X
                                                    {{ $CartInfo->Quantity }} =
                                                    {{ $CartInfo->rel_to_product->After_discount * $CartInfo->Quantity }}/-
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                </li>
                            @endforeach



                        </ul>
                    </div>

                    <div class="mb-4">
                        <div class="form-group">
                            <h6>Delivery Location</h6>
                            <ul class="no-ul-list">
                                <li>
                                    <input id="c1" class="radio-custom delivery" name="charge" type="radio"
                                        value="70">
                                    <label for="c1" class="radio-custom-label">Inside City</label>
                                </li>
                                <li>
                                    <input id="c2" class="radio-custom delivery" name="charge" type="radio"
                                        value="100">
                                    <label for="c2" class="radio-custom-label">Outside City</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-group">
                            <h6>Select Payment Method</h6>
                            <ul class="no-ul-list">
                                <li>
                                    <input id="c3" class="radio-custom" name="payment_method" type="radio"
                                        value="1">
                                    <label for="c3" class="radio-custom-label">Cash on Delivery</label>
                                </li>
                                <li>
                                    <input id="c4" class="radio-custom" name="payment_method" type="radio"
                                        value="2">
                                    <label for="c4" class="radio-custom-label">Pay With SSLCommerz</label>
                                </li>
                                <li>
                                    <input id="c5" class="radio-custom" name="payment_method" type="radio"
                                        value="3">
                                    <label for="c5" class="radio-custom-label">Pay With Stripe</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4 gray">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Subtotal</span><span
                                        class="ml-auto text-dark ft-medium totalAmount">{{ session('totalAmountForCartPage') }}</span>
                                </li>
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Charge</span> <span class="ml-auto text-dark ft-medium deliveryChargeField">TK
                                        0</span>
                                </li>
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Total</span> <span class="ml-auto text-dark ft-medium totalAmountShow">Tk 0
                                        /-</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <input type="hidden" name="totalAmountForCartPage" value="{{session('totalAmountForCartPage')}}">
                    <input type="hidden" name="subTotalAmountForCartPage" value="{{session('subTotalAmountForCartPage')}}">
                    <input type="hidden" name="discountForCartPage" value="{{session('discountForCartPage')}}">
                    <button class="btn btn-dark mb-3" type="submit">Place Your Order</button>

                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Product Detail End ======================== -->
@endsection


@section('frontend_script')
    <script>
        $(".delivery").click(function() {
            var deliveryValue = $(this).val();

            $(".deliveryChargeField").html("Tk " + deliveryValue);


            var subTotal = $(".totalAmount").html();

            var total_amount = parseInt(subTotal) + parseInt(deliveryValue);

            $(".totalAmountShow").html("Tk " + total_amount);

        })
    </script>


    <script>
        $("#billCountry").change(function() {
            var country_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            $.ajax({


                type: 'POST',
                url: 'ajaxGetCity',
                data: {
                    'country_id': country_id
                },
                success: function(data) {
                    $("#billCity").html(data);
                }

            });
        })
    </script>


    <script>
        $(document).ready(function() {
            $('#billCountry').select2();
            $('#billCity').select2();
        });
    </script>
@endsection
