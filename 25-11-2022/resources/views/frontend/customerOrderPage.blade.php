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
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= Dashboard Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-between">

                {{-- <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
							<div class="d-block border rounded">
								<div class="dashboard_author px-2 py-5">
									<div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
										<img src="assets/img/team-1.jpg" class="img-fluid circle" width="100" alt="" />
									</div>
									<div class="dash_caption">
										<h4 class="fs-md ft-medium mb-0 lh-1">Adam Wishnoi</h4>
										<span class="text-muted smalls">Australia</span>
									</div>
								</div>
								
								<div class="dashboard_author">
									<h4 class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">Dashboard Navigation</h4>
									<ul class="dahs_navbar">
										<li><a href="my-orders.html" class="active"><i class="lni lni-shopping-basket mr-2"></i>My Order</a></li>
										<li><a href="wishlist.html"><i class="lni lni-heart mr-2"></i>Wishlist</a></li>
										<li><a href="profile-info.html"><i class="lni lni-user mr-2"></i>Profile Info</a></li>
										<li><a href="login.html"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
									</ul>
								</div>
								
							</div>
						</div> --}}


                <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">



                    <div class="d-block border rounded mfliud-bot">
                        <div class="dashboard_author px-2 py-5">

                            @foreach ($allcustomerInfo as $customerInfo)
                                <div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
                                    <img src="{{ asset('uploads/CustomerProfile') }}/{{ $customerInfo->photo }}"
                                        class="img-fluid circle" height="150" width="150" alt="" />
                                </div>
                                <div class="dash_caption">
                                    <h4 class="fs-md ft-medium mb-0 lh-1">{{ $customerInfo->name }}</h4>
                                    <span class="text-muted smalls">{{ $customerInfo->country }}</span>
                                </div>
                            @endforeach


                        </div>

                        <div class="dashboard_author">
                            <h4 class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">
                                Dashboard Navigation</h4>
                            <ul class="dahs_navbar">
                                <li><a class="active" href="{{ route('customerOrderPage') }}"><i
                                            class="lni lni-shopping-basket mr-2"></i>My Order</a></li>
                                <li><a href="wishlist.html"><i class="lni lni-heart mr-2"></i>Wishlist</a></li>
                                <li><a href="{{ route('customerProfile') }}" class=""><i
                                            class="lni lni-user mr-2"></i>Profile
                                        Info</a></li>
                                <li><a href="login.html"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-8 col-xl-8 text-center">
                    <!-- Single Order List -->
                    @foreach ($OrderItemsBillsGet as $OrderItemsBills)
                        <div class="ord_list_wrap border mb-4">



                            <div class="ord_list_head gray d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="olh_flex">
                                    {{-- <p class="m-0 p-0"><span class="text-muted">Order Number</span></p> --}}
                                    <h6 class="mb-0 ft-medium">Order Number:
                                        {{ $OrderItemsBills->order_id }}
                                    </h6>
                                </div>
                            </div>

                            <div class="ord_list_body text-left">
                                <!-- First Product -->



                                @foreach (App\Models\orderItemsModel::where('order_id', $OrderItemsBills->order_id)->get() as $orderProduct)
                                    <div class="row align-items-center justify-content-center m-0 py-4 br-bottom">
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                                            <div class="cart_single d-flex align-items-start mfliud-bot">
                                                <div class="cart_selected_single_thumb">
                                                    <a href="#"><img
                                                            src="{{ asset('uploads/products/preview') }}/{{ $orderProduct->rel_to_product->product_preview_img }}"
                                                            width="75" class="img-fluid rounded" alt=""></a>
                                                </div>
                                                <div class="cart_single_caption pl-3">
                                                    <p class="mb-0"><span class="text-muted small">Dresses</span></p>
                                                    <h4 class="product_title fs-sm ft-medium mb-1 lh-1">
                                                        {{ $orderProduct->rel_to_product->product_name }}</h4>
                                                    <p class="mb-2"><span class="text-dark medium">Size:
                                                            {{ $orderProduct->rel_to_size->SizeName }}</span>, <span
                                                            class="text-dark medium">Color:
                                                            {{ $orderProduct->rel_to_color->ColorName }}</span></p>
                                                    <h4 class="fs-sm ft-bold mb-0 lh-1">Tk {{ $orderProduct->price }}/-
                                                    </h4>
                                                    <h4 class="fs-sm ft-bold mt-1 lh-1">Quantity: <span
                                                            class="text-danger">{{ $orderProduct->quantity }}</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12 ml-auto">
                                            <p class="mb-1 p-0"><span class="text-muted">Status</span></p>
                                            <div class="delv_status"><span
                                                    class="ft-medium small text-warning bg-light-warning rounded px-3 py-1">Completed</span>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach







                            </div>




                            @foreach (App\Models\ordersBillModel::where('order_id', $OrderItemsBills->order_id)->get() as $orderBills)
                                <div class="ord_list_footer d-flex align-items-center justify-content-between br-top px-3">
                                    <div
                                        class="col-xl-12 col-lg-12 col-md-12 pl-0 py-2 olf_flex d-flex align-items-center justify-content-between">
                                        <div class="olf_flex_inner">
                                            <p class="m-0 p-0"><span class="text-muted medium text-left">Order Date:
                                                    {{ $orderBills->created_at->format('d-m-Y') }}</span>
                                            </p>
                                        </div>
                                        <div class="olf_inner_right">
                                            <h5 class="mb-0 fs-sm ft-bold">Sub-total:
                                                Tk {{ $orderBills->sub_total }} /-
                                            </h5>
                                        </div>
                                        <div class="olf_inner_right">
                                            <h5 class="mb-0 fs-sm ft-bold">Discount:
                                                Tk {{ $orderBills->Discount }} /-
                                            </h5>
                                        </div>
                                        <div class="olf_inner_right">
                                            <h5 class="mb-0 fs-sm ft-bold">Charge:
                                                Tk {{ $orderBills->Delivery_charge }} /-
                                            </h5>
                                        </div>
                                        <div class="olf_inner_right">
                                            <h5 class="mb-0 fs-sm ft-bold">Total:
                                                Tk {{ $orderBills->Total_amount }} /-
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach









                        </div>
                    @endforeach


                    <!-- End Order List -->

                </div>


            </div>
        </div>
    </section>
    <!-- ======================= Dashboard Detail End ======================== -->
@endsection