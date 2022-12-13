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
                            <li class="breadcrumb-item active" aria-current="page">Profile Info</li>
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

                <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
                    <div class="d-block border rounded mfliud-bot">
                        <div class="dashboard_author px-2 py-5">

                            @foreach ($allcustomerInfo as $customerInfo)
                                <div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
                                    <img src="{{asset("uploads/CustomerProfile")}}/{{ $customerInfo->photo}}" class="img-fluid circle" height="150" width="150"
                                        alt="" />
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
                                <li><a href="{{route("customerOrderPage")}}"><i class="lni lni-shopping-basket mr-2"></i>My Order</a></li>
                                <li><a href="{{route("customerWishlistPage")}}"><i class="lni lni-heart mr-2"></i>Wishlist</a></li>
                                <li><a href="{{route("customerProfile")}}" class="active"><i class="lni lni-user mr-2"></i>Profile
                                        Info</a></li>
                                <li><a href="{{ route('customerLogout') }}"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                    <!-- row -->
                    <div class="row align-items-center">
                        <form class="row m-0" method="POST" enctype="multipart/form-data"
                            action="{{ route('customerProfileUpdate') }}">

                            @csrf

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">First Name *</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Auth::guard('customerLogin')->user()->name }}" />
                                </div>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">Email ID *</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ Auth::guard('customerLogin')->user()->email }}" />
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">Current Password *</label>
                                    <input type="password" class="form-control" name="current_password"
                                        placeholder="Current Password" />
                                </div>
                                @error('current_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">New Password *</label>
                                    <input type="password" class="form-control" name="password" placeholder="New Password" />
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">Confirm Password *</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Confirm Password" />
                                </div>
                                @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                @if (session('pass_update_success'))
                                    <div class="alert alert-success">{{ session('pass_update_success') }}</div>
                                @endif
                                @if (session('pass_update_fail'))
                                    <div class="alert alert-danger">{{ session('pass_update_fail') }}</div>
                                @endif
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">Country</label>
                                    <input type="text" name="country" class="form-control"
                                        value="{{ Auth::guard('customerLogin')->user()->country }}" />
                                </div>
                                @error('country')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">Address</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ Auth::guard('customerLogin')->user()->address }}" />
                                </div>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium">Profile Image</label>
                                    <img src="{{asset("uploads/CustomerProfile")}}/{{ $customerInfo->photo}}" alt="" width="250px" height="250px" class="ms-3" id="CusProfileImageView">
                                    <input type="file" class="form-control" name="profileImg"  onchange="document.getElementById('CusProfileImageView').src = window.URL.createObjectURL(this.files[0])" />
                                </div>
                            </div>



                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Save Changes</button>
                                </div>
                            </div>




                        </form>
                    </div>
                    <!-- row -->
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Dashboard Detail End ======================== -->
@endsection
