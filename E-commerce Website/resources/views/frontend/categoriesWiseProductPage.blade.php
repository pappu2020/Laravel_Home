@extends('frontend.master')


@section('content')
    <section class="bg-cover" style="background:url({{ asset('frontend_asset/assets//img/banner-2.png') }}) no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-left py-5 mt-3 mb-3">
                        <h1 class="ft-medium mb-3">Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Shop Style 1 ======================== -->


    <!-- ======================= Filter Wrap Style 1 ======================== -->
    <section class="py-3 br-bottom br-top mb-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$categoryName}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>





    <div class="container">
        
      
           <div class="row align-items-center rows-products">
                <!-- Single -->


                @foreach ($allProductInfo as $ProductsInfo)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">



                            @if ($ProductsInfo->product_Discount)
                                <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                    -{{ $ProductsInfo->product_Discount }}%
                                </div>
                            @else
                                <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                    0%
                                </div>
                            @endif






                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden"
                                        href="{{ route('productDetails', $ProductsInfo->slug) }}"><img class="card-img-top"
                                            src="{{ asset('uploads/products/preview') }}/{{ $ProductsInfo->product_preview_img }}"
                                            alt="..."></a>
                                </div>
                            </div>
                            <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span
                                                class="small">{{ $ProductsInfo->rel_to_category->catagory_name }}</span>
                                        </div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                href="{{ route('productDetails', $ProductsInfo->slug) }}">{{ $ProductsInfo->product_name }}</a>
                                        </h5>
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty">

                                            @if ($ProductsInfo->product_Discount)
                                                <span class="ft-medium text-muted line-through fs-md mr-2">Tk
                                                    {{ $ProductsInfo->product_Price }}/-</span>
                                            @endif

                                            <span class="ft-bold text-danger fs-sm">Tk
                                                {{ $ProductsInfo->After_discount }}/-</span>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        
    @endsection
