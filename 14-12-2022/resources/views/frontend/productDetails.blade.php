@extends('frontend.master')


@section('content')
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
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
            <div class="row justify-content-between">

                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <div class="quick_view_slide">


                        @foreach ($getProductThumbedDetails as $ProductThumbedDetails)
                            <div class="single_view_slide"><a
                                    href="{{ asset('uploads/products/thumbnails') }}/{{ $ProductThumbedDetails->thumbs_images }}"
                                    data-lightbox="roadtrip" class="d-block mb-4"><img
                                        src="{{ asset('uploads/products/thumbnails') }}/{{ $ProductThumbedDetails->thumbs_images }}"
                                        class="img-fluid rounded" alt="" /></a>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <form action="{{ route('cartInsert') }}" method="POST">
                        @csrf
                        <div class="prd_details pl-3">



                            @foreach ($getProductDetails as $ProductDetails)
                                <input type="hidden" value="{{ $ProductDetails->id }}" name="product_id">
                                <div class="prt_01 mb-1"><span
                                        class="text-light bg-info rounded px-2 py-1">{{ $ProductDetails->rel_to_category->catagory_name }}</span>
                                </div>
                                <div class="prt_02 mb-3">
                                    <h2 class="ft-bold mb-1">{{ $ProductDetails->product_name }}</h2>
                                    <div class="text-left">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="small">(412 Reviews)</span>
                                        </div>
                                        <div class="elis_rty">

                                            @if ($ProductDetails->product_Discount)
                                                <span class="ft-medium text-muted line-through fs-md mr-2">Tk
                                                    {{ $ProductDetails->product_Price }}/-</span>
                                            @endif

                                            <span class="ft-bold text-danger fs-sm">Tk
                                                {{ $ProductDetails->After_discount }}/-</span>


                                        </div>
                                    </div>
                                </div>

                                <div class="prt_03 mb-4">
                                    <p>{{ $ProductDetails->product_Short_desp }}</p>
                                </div>
                            @endforeach


                            <div class="prt_04 mb-2">


                                <p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>
                                @error('color_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="text-left">


                                    @php
                                        $color = null;
                                    @endphp


                                    @foreach ($getAvailableColor as $AvailableColor)
                                        @if ($AvailableColor->rel_to_color->ColorCode == null)
                                            {{-- <h1 class="text-danger">Not Available</h1>
                                            <input type="hidden" value="3" name="color_id"> --}}

                                            <div class="form-check form-option form-check-inline mb-1">
                                                <input class="form-check-input color_id" type="radio"
                                                    value="{{ $AvailableColor->rel_to_color->id }}" name="color_id"
                                                    id="white8{{ $AvailableColor->rel_to_color->id }}">
                                                <label style="background:{{ $AvailableColor->rel_to_color->ColorCode }}"
                                                    class="form-option-label rounded-circle"
                                                    for="white8{{ $AvailableColor->rel_to_color->id }}"><span
                                                        class="form-option-color rounded-circle">N/A</span></label>
                                            </div>
                                        @else
                                            <div class="form-check form-option form-check-inline mb-1">
                                                <input class="form-check-input color_id" type="radio"
                                                    value="{{ $AvailableColor->rel_to_color->id }}" name="color_id"
                                                    id="white8{{ $AvailableColor->rel_to_color->id }}">
                                                <label style="background:{{ $AvailableColor->rel_to_color->ColorCode }}"
                                                    class="form-option-label rounded-circle"
                                                    for="white8{{ $AvailableColor->rel_to_color->id }}"><span
                                                        class="form-option-color rounded-circle"></span></label>
                                            </div>
                                        @endif

                                        @php
                                            $color = $AvailableColor->rel_to_color->ColorCode;
                                        @endphp
                                    @endforeach


                                </div>







                            </div>

                            <div class="prt_04 mb-4">
                                <p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
                                @error('size')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="text-left pb-0 pt-2 sizeId">


                                    @if ($color != null)
                                        @foreach ($getsize as $size)
                                            <div class="form-check size-option form-option form-check-inline mb-2">
                                                <input class="form-check-input" type="radio" name="size"
                                                    id="{{ $size->SizeName }}" value="{{ $size->SizeName }}">
                                                <label class="form-option-label"
                                                    for="{{ $size->SizeName }}">{{ $size->SizeName }}</label>
                                            </div>
                                        @endforeach
                                    @else
                                    @endif

                                    @foreach (App\Models\addInventoryModel::where('product_id', $ProductDetails->first()->id)->get() as $sizeShow)
                                        @if ($sizeShow->rel_to_size->id == 1)
                                            <div class="form-check size-option form-option form-check-inline mb-2">
                                                <input class="form-check-input" type="radio" name="size"
                                                    id="{{ $sizeShow->id }}" value="{{ $sizeShow->rel_to_size->id }}">
                                                <label class="form-option-label"
                                                    for="{{ $sizeShow->id }}">{{ $sizeShow->rel_to_size->SizeName }}</label>
                                            </div>
                                        @else
                                            <div class="form-check size-option form-option form-check-inline mb-2">
                                                <input class="form-check-input" type="radio" name="size"
                                                    id="{{ $sizeShow->id }}" value="{{ $sizeShow->rel_to_size->id }}">
                                                <label class="form-option-label"
                                                    for="{{ $sizeShow->id }}">{{ $sizeShow->rel_to_size->SizeName }}</label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="prt_05 mb-4">
                                <div class="form-row mb-7">
                                    <div class="col-12 col-lg-auto">
                                        <!-- Quantity -->
                                        <select class="mb-2 custom-select" name="cart_quantity">

                                            @for ($i = 1; $i <= 50; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor

                                        </select>

                                        @if (session('QuantityError'))
                                            <p class="text-danger fst-italic">{{ session('QuantityError') }}</p>
                                        @endif

                                        @if (session('quantity_zero'))
                                            <p class="text-danger fst-italic">{{ session('quantity_zero') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-12 col-lg">
                                        <!-- Submit -->
                                        <button type="submit" class="btn btn-block custom-height bg-dark mb-2"
                                            name="wishCartBtn" value="1">
                                            <i class="lni lni-shopping-basket mr-2"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-12 col-lg-auto">
                                        <!-- Wishlist -->
                                        <button class="btn custom-height btn-default btn-block mb-2 text-dark"
                                            type="submit" name="wishCartBtn" value="2">
                                            <i class="lni lni-heart mr-2"></i>Wishlist
                                        </button>
                                    </div>

                    </form>
                </div>
            </div>

            <div class="prt_06">
                <p class="mb-0 d-flex align-items-center">
                    <span class="mr-4">Share:</span>
                    <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2"
                        href="#!">
                        <i class="fab fa-twitter position-absolute"></i>
                    </a>
                    <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2"
                        href="#!">
                        <i class="fab fa-facebook-f position-absolute"></i>
                    </a>
                    <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted"
                        href="#!">
                        <i class="fab fa-pinterest-p position-absolute"></i>
                    </a>
                </p>
            </div>

        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- ======================= Product Detail End ======================== -->

    <!-- ======================= Product Description ======================= -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4"
                        id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="description-tab" href="#description" data-toggle="tab"
                                role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#information" id="information-tab" data-toggle="tab"
                                role="tab" aria-controls="information" aria-selected="false">Additional
                                information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#reviews" id="reviews-tab" data-toggle="tab" role="tab"
                                aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Description Content -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">

                            @foreach ($getProductDetails as $ProductDetails)
                                <div class="description_info">
                                    {!! $ProductDetails->product_Long_desp !!}
                                </div>
                            @endforeach
                        </div>

                        <!-- Additional Content -->
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="additionals">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="ft-medium text-dark">ID</th>
                                            <td>#1253458</td>
                                        </tr>
                                        <tr>
                                            <th class="ft-medium text-dark">SKU</th>
                                            <td>KUM125896</td>
                                        </tr>
                                        <tr>
                                            <th class="ft-medium text-dark">Color</th>
                                            <td>Sky Blue</td>
                                        </tr>
                                        <tr>
                                            <th class="ft-medium text-dark">Size</th>
                                            <td>Xl, 42</td>
                                        </tr>
                                        <tr>
                                            <th class="ft-medium text-dark">Weight</th>
                                            <td>450 Gr</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Reviews Content -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="reviews_info">
                                <div class="single_rev d-flex align-items-start br-bottom py-3">
                                    <div class="single_rev_thumb"><img src="assets/img/team-1.jpg"
                                            class="img-fluid circle" width="90" alt="" /></div>
                                    <div class="single_rev_caption d-flex align-items-start pl-3">
                                        <div class="single_capt_left">
                                            <h5 class="mb-0 fs-md ft-medium lh-1">Daniel Rajdesh</h5>
                                            <span class="small">30 jul 2021</span>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                                praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                                molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                                in culpa qui officia deserunt mollitia animi, id est laborum</p>
                                        </div>
                                        <div class="single_capt_right">
                                            <div
                                                class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>


                            @auth("customerLogin")
                                
                             @if (App\Models\orderItemsModel::where("customer_id",Auth::guard("customerLogin")->id())->where("product_id",$ProductDetails->id)->exists())
                            @if (App\Models\orderItemsModel::where("customer_id",Auth::guard("customerLogin")->id())->where("product_id",$ProductDetails->id)->whereNotNull("review")->first() == false)
                                
                            
                            <div class="reviews_rate">
                                <form class="row" method="post" action="{{route("reviewInsert")}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <h4>Submit Rating</h4>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div
                                            class="revie_stars d-flex align-items-center justify-content-between px-2 py-2 gray rounded mb-2 mt-1">
                                            <div class="srt_013">
                                                <div class="submit-rating">
                                                    <input id="5" type="radio" name="star"
                                                        value="5" />
                                                    <label for="5" title="5 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="4" type="radio" name="star"
                                                        value="4" />
                                                    <label for="4" title="4 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="3" type="radio" name="star"
                                                        value="3" />
                                                    <label for="3" title="3 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="2" type="radio" name="star"
                                                        value="2" />
                                                    <label for="2" title="2 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="1" type="radio" name="star"
                                                        value="1" />
                                                    <label for="1" title="1 star">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="srt_014">
                                                <h6 class="mb-0">4 Star</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="medium text-dark ft-medium">Full Name</label>
                                            <input type="text" value="{{Auth::guard("customerLogin")->user()->name}}" class="form-control" />
                                        </div>
                                    </div>

                                    <input type="hidden" name="review_cus_id" value="{{Auth::guard("customerLogin")->id()}}">
                                    <input type="hidden" name="review_product_id" value="{{$ProductDetails->id}}">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="medium text-dark ft-medium">Email Address</label>
                                            <input type="email" value="{{Auth::guard("customerLogin")->user()->email}}" class="form-control" />
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="medium text-dark ft-medium">Images</label>
                                            <img src="" alt="" width="150px" height="150px" id="reviewImageView">
                                            <input type="file" multiple name="reviewImage[]" onchange="document.getElementById('reviewImageView').src = window.URL.createObjectURL(this.files[0])" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="medium text-dark ft-medium">Description</label>
                                            <textarea class="form-control" name="review_des"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group m-0">
                                            <button class="btn btn-white stretched-link hover-black" type="submit">Submit Review <i
                                                    class="lni lni-arrow-right"></i></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                             
                            @else
                            <div class="alert alert-danger">You are already reviewed this product!!</div>  
                            @endif


                             @endif

                             @endauth





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Product Description End ==================== -->

    <!-- ======================= Similar Products Start ============================ -->
    <section class="middle pt-0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Similar Products</h2>
                        <h3 class="ft-bold pt-3">Matching Products</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="slide_items">


                        <!-- single Item -->


                        @foreach ($getsimilarProduct as $similarProduct)
                            <div class="single_itesm">
                                <div class="product_grid card b-0 mb-0">
                                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                        New
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="shop_thumb position-relative">
                                            <a class="card-img-top d-block overflow-hidden"
                                                href="{{ route('productDetails', $similarProduct->slug) }}"><img
                                                    class="card-img-top"
                                                    src="{{ asset('uploads/products/preview') }}/{{ $similarProduct->product_preview_img }}"
                                                    alt="..."></a>
                                        </div>
                                    </div>
                                    <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                        <div class="text-left">
                                            <div class="text-center">
                                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a
                                                        href="{{ route('productDetails', $similarProduct->slug) }}">{{ $similarProduct->product_name }}</a>
                                                </h5>
                                                <div class="elis_rty">

                                                    @if ($similarProduct->product_Discount)
                                                        <span class="ft-medium text-muted line-through fs-md mr-2">Tk
                                                            {{ $similarProduct->product_Price }}/-</span>
                                                    @endif

                                                    <span class="ft-bold text-danger fs-sm">Tk
                                                        {{ $similarProduct->After_discount }}/-</span>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Similar Products Start ============================ -->
@endsection


@section('frontend_script')
    <script>
        $(".color_id").click(function() {
            var color_id = $(this).val();
            var product_id = '{{ $ProductDetails->id }}';


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/getSize',
                type: 'POST',
                data: {
                    'color_id': color_id,
                    'product_id': product_id

                },

                success: function(data) {

                    $(".sizeId").html(data);

                }
            })
        })
    </script>
@endsection
