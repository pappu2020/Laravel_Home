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
                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
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
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 col-md-12">
                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">


                        @php
                            
                            $subtotal = 0;
                            
                        @endphp



                        @foreach ($allCartInfo as $CartInfo)
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <!-- Image -->
                                        <img src="{{ asset('uploads/products/preview') }}/{{ $CartInfo->rel_to_product->product_preview_img }}"
                                            alt="..." class="img-fluid">
                                    </div>

                                    <form action="{{ route('cartUpdate') }}" method="POST">
                                        @csrf
                                        <div class="col d-flex align-items-center justify-content-between">
                                            <div class="cart_single_caption pl-2">
                                                <h4 class="product_title fs-md ft-medium mb-1 lh-1">
                                                    {{ $CartInfo->rel_to_product->product_name }}</h4>
                                                <p class="mb-1 lh-1"><span class="text-dark">
                                                        @if ($CartInfo->size_id == null)
                                                            Size Not Available
                                                        @else
                                                            Size: {{ $CartInfo->rel_to_size->SizeName }}
                                                        @endif

                                                    </span></p>
                                                <p class="mb-3 lh-1"><span class="text-dark">

                                                        @if ($CartInfo->color_id == null)
                                                            color Not Available
                                                        @else
                                                            Size: {{ $CartInfo->rel_to_color->ColorName }}
                                                        @endif


                                                    </span></p>
                                                <h4 class="fs-md ft-medium mb-3 lh-1">Tk
                                                    {{ $CartInfo->rel_to_product->After_discount }} X
                                                    {{ $CartInfo->Quantity }} </h4>
                                                <select class="mb-2 custom-select w-auto"
                                                    name="cartPageSizeSelection[{{ $CartInfo->id }}]">
                                                    <option value="1"{{ $CartInfo->Quantity == 1 ? 'selected' : '' }}>1
                                                    </option>
                                                    <option value="2"{{ $CartInfo->Quantity == 2 ? 'selected' : '' }}>
                                                        2
                                                    </option>
                                                    <option value="3"{{ $CartInfo->Quantity == 3 ? 'selected' : '' }}>
                                                        3
                                                    </option>
                                                    <option value="4"{{ $CartInfo->Quantity == 4 ? 'selected' : '' }}>
                                                        4
                                                    </option>
                                                    <option value="5"{{ $CartInfo->Quantity == 5 ? 'selected' : '' }}>
                                                        5
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="fls_last"><a href="{{ route('cartItemDelete', $CartInfo->id) }}"
                                                    class="close_slide gray"><i class="ti-close"></i></a>
                                            </div>
                                        </div>
                                </div>
                            </li>
                            @php
                                $subtotal += $CartInfo->rel_to_product->After_discount * $CartInfo->Quantity;
                            @endphp
                        @endforeach



                        <div class="col-12 col-md-auto mfliud mt-3">
                            <button type="submit" class="btn stretched-link borders">Update Cart</button>
                        </div>

                        </form>


                    </ul>



                    <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                        <div class="col-12 col-md-7">
                            <!-- Coupon -->
                            <form class="mb-7 mb-md-0" method="GET" action="{{route("cartPage")}}">
                                @csrf
                                <label class="fs-sm ft-medium text-dark">Coupon code:</label>
                                <div class="row form-row">
                                    <div class="col">
                                        <input type="text" class="form-control border border-dark" name="couponpage_name" id="" value="{{@$_GET['coupon_code']}}">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-dark" type="submit">Apply</button>
                                    </div>
                                </div>
                                <p class="text-danger">@if ($message)
                                    {{{$message}}}
                                @endif</p>
                            </form>
                        </div>

                    </div>
                </div>



                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card mb-4 gray mfliud">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Subtotal</span> <span class="ml-auto text-dark ft-medium">Tk
                                        {{ $subtotal }}/-</span>
                                </li>
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Discount</span> <span class="ml-auto text-dark ft-medium">

                                        Tk {{$discount}}/-


                                    </span>
                                
                                </li>
                                  
                                @if ($allDone)

                                <p class="text-danger fst-italic">{{$allDone.$coupon_code}}</p>
                                    
                                @endif
                                
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Total</span> <span class="ml-auto text-dark ft-medium">

                                     @php
                                            $percentage = 0;
                                            $solid = 0;
                                     @endphp

                                      @if ($type == 1)
                                       Tk {{$percentage = $subtotal * ($discount/100)}}/-

                                       @php
                                           session([
                                           'totalAmountForCartPage' => $percentage = $subtotal * ($discount/100),
                                    ]);
                                       @endphp
                                       
                                       @else
                                       Tk {{$solid = $subtotal - $discount}}/-

                                       
                                       @php
                                           session([
                                           'totalAmountForCartPage' => $solid = $subtotal - $discount,
                                    ]);
                                       @endphp
                                      @endif

                                    </span>
                                </li>
                                <li class="list-group-item fs-sm text-center">
                                    Shipping cost calculated at Checkout *
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-block btn-dark mb-3" href="{{route("checkoutPage")}}">Proceed to Checkout</a>

                    <a class="btn-link text-dark ft-medium" href="shop.html">
                        <i class="ti-back-left mr-2"></i> Continue Shopping
                    </a>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Product Detail End ======================== -->
@endsection
