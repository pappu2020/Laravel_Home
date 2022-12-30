@extends("frontend.master")


@section('content')

<!-- ======================= Shop Style 1 ======================== -->
			<section class="bg-cover" style="background:url({{asset("frontend_asset/assets//img/banner-2.png")}}) no-repeat;">
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
			<section class="py-3 br-bottom br-top">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Shop</a></li>
									<li class="breadcrumb-item active" aria-current="page">Women's</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================= Filter Wrap ============================== -->
			
			
			<!-- ======================= All Product List ======================== -->
			<section class="middle">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 p-xl-0">
							<div class="search-sidebar sm-sidebar border">
								<div class="search-sidebar-body">
									<!-- Single Option -->
									<div class="single_search_boxed">
										<div class="widget-boxed-header">
											<h4><a href="#pricing" data-toggle="collapse" aria-expanded="false" role="button">Pricing</a></h4>
										</div>
										<div class="widget-boxed-body collapse show" id="pricing" data-parent="#pricing">
											<div class="row">
												<div class="col-lg-6 pr-1">
													<div class="form-group pl-3">
														<input type="number" id="min" class="form-control" placeholder="Min">
													</div>
												</div>
												<div class="col-lg-6 pl-1">
													<div class="form-group pr-3">
														<input type="number" id="max" class="form-control" placeholder="Max">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group px-3">
														<button type="submit" id="minMax_btn" class="btn form-control">Submit</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Single Option -->
									<div class="single_search_boxed">
										<div class="widget-boxed-header">
											<h4><a href="#Categories" data-toggle="collapse" aria-expanded="false" role="button">Categories</a></h4>
										</div>
										<div class="widget-boxed-body collapse show" id="Categories" data-parent="#Categories">
											<div class="side-list no-border">
												<!-- Single Filter Card -->
												<div class="single_filter_card">
													<div class="card-body pt-0">
														<div class="inner_widget_link">
															<ul class="no-ul-list">
																
                                                                
                                                                @foreach ($allCategoryInfo as $CategoryInfo)
                                                                    
                                                                
                                                                <li>
																	<input id="category1{{$CategoryInfo->id}}" class="categoryInfo" name="category" type="radio" value="{{$CategoryInfo->id}}">
																	<label for="category1{{$CategoryInfo->id}}" class="checkbox-custom-label">{{$CategoryInfo->catagory_name}}<span>{{App\Models\productModel::where("category_id",$CategoryInfo->id)->count()}}</span></label>
																</li>

                                                                @endforeach
															
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Single Option -->
									<div class="single_search_boxed">
										<div class="widget-boxed-header">
											<h4><a href="#brands" data-toggle="collapse" aria-expanded="false" role="button">Brands</a></h4>
										</div>
										<div class="widget-boxed-body collapse show" id="brands" data-parent="#brands">
											<div class="side-list no-border">
												<!-- Single Filter Card -->
												<div class="single_filter_card">
													<div class="card-body pt-0">
														<div class="inner_widget_link">
															<ul class="no-ul-list">
																<li>
																	<input id="brands1" class="checkbox-custom" name="brands" type="radio">
																	<label for="brands1" class="checkbox-custom-label">Sumsung<span>142</span></label>
																</li>
																<li>
																	<input id="brands2" class="checkbox-custom" name="brands" type="radio">
																	<label for="brands2" class="checkbox-custom-label">Apple<span>652</span></label>
																</li>
																<li>
																	<input id="brands3" class="checkbox-custom" name="brands" type="radio">
																	<label for="brands3" class="checkbox-custom-label">Nike<span>232</span></label>
																</li>
																<li>
																	<input id="brands4" class="checkbox-custom" name="brands" type="radio">
																	<label for="brands4" class="checkbox-custom-label">Reebok<span>192</span></label>
																</li>
																<li>
																	<input id="brands5" class="checkbox-custom" name="brands" type="radio">
																	<label for="brands5" class="checkbox-custom-label">Hawai<span>265</span></label>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Single Option -->
									<div class="single_search_boxed">
										<div class="widget-boxed-header">
											<h4><a href="#colors" data-toggle="collapse" class="collapsed" aria-expanded="false" role="button">Colors</a></h4>
										</div>
										<div class="widget-boxed-body collapse" id="colors" data-parent="#colors">
											<div class="side-list no-border">
												<!-- Single Filter Card -->
												<div class="single_filter_card">
													<div class="card-body pt-0">
														<div class="text-left">
															<div class="form-check form-option form-check-inline mb-1">
																<input class="form-check-input" type="radio" name="colora8" id="whitea8">
																<label class="form-option-label rounded-circle" for="whitea8"><span class="form-option-color rounded-circle blc7"></span></label>
															</div>
															<div class="form-check form-option form-check-inline mb-1">
																<input class="form-check-input" type="radio" name="colora8" id="bluea8">
																<label class="form-option-label rounded-circle" for="bluea8"><span class="form-option-color rounded-circle blc2"></span></label>
															</div>
															<div class="form-check form-option form-check-inline mb-1">
																<input class="form-check-input" type="radio" name="colora8" id="yellowa8">
																<label class="form-option-label rounded-circle" for="yellowa8"><span class="form-option-color rounded-circle blc5"></span></label>
															</div>
															<div class="form-check form-option form-check-inline mb-1">
																<input class="form-check-input" type="radio" name="colora8" id="pinka8">
																<label class="form-option-label rounded-circle" for="pinka8"><span class="form-option-color rounded-circle blc3"></span></label>
															</div>
															<div class="form-check form-option form-check-inline mb-1">
																<input class="form-check-input" type="radio" name="colora8" id="reda">
																<label class="form-option-label rounded-circle" for="reda"><span class="form-option-color rounded-circle blc4"></span></label>
															</div>
															<div class="form-check form-option form-check-inline mb-1">
																<input class="form-check-input" type="radio" name="colora8" id="greena">
																<label class="form-option-label rounded-circle" for="greena"><span class="form-option-color rounded-circle blc6"></span></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Single Option -->
									<div class="single_search_boxed">
										<div class="widget-boxed-header">
											<h4><a href="#size" data-toggle="collapse" class="collapsed" aria-expanded="false" role="button">Size</a></h4>
										</div>
										<div class="widget-boxed-body collapse" id="size" data-parent="#size">
											<div class="side-list no-border">
												<!-- Single Filter Card -->
												<div class="single_filter_card">
													<div class="card-body pt-0">
														<div class="text-left pb-0 pt-2">
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="26s">
																<label class="form-option-label" for="26s">26</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="28s">
																<label class="form-option-label" for="28s">28</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="30s" checked>
																<label class="form-option-label" for="30s">30</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="32s">
																<label class="form-option-label" for="32s">32</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="34s">
																<label class="form-option-label" for="34s">34</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="36s">
																<label class="form-option-label" for="36s">36</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="38s">
																<label class="form-option-label" for="38s">38</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="40s">
																<label class="form-option-label" for="40s">40</label>
															</div>
															<div class="form-check form-option form-check-inline mb-2">
																<input class="form-check-input" type="radio" name="sizes" id="42s">
																<label class="form-option-label" for="42s">42</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						
						<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
							
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="border mb-3 mfliud">
										<div class="row align-items-center py-2 m-0">
											<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
												<h6 class="mb-0">Searched Products Found</h6>
											</div>
											
											<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
												<div class="filter_wraps d-flex align-items-center justify-content-end m-start">
													<div class="single_fitres mr-2 br-right">
														<select class="custom-select simple">
														  <option value="1" selected="">Default Sorting</option>
														  <option value="2">Sort by price: Low price</option>
														  <option value="3">Sort by price: Hight price</option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- row -->
							<div class="row align-items-center rows-products">
								
								<!-- Single -->
								
                                
                                
                                @forelse ($allProductInfo as $ProductInfo)
                                    
                               
                                <div class="col-xl-4 col-lg-4 col-md-6 col-6">
									<div class="product_grid card b-0">
										<div class="badge bg-danger text-white position-absolute ft-regular ab-left text-upper">-{{($ProductInfo->product_Discount == null?"0":$ProductInfo->product_Discount)}}%</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="{{ route('productDetails', $ProductInfo->slug) }}"><img class="card-img-top" src="{{asset("uploads/products/preview")}}/{{$ProductInfo->product_preview_img}}" alt="..."></a>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white">
											
											<div class="text-left">
												<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">{{$ProductInfo->product_name}}</a></h5>
												<div class="elis_rty"><span class="ft-bold text-dark fs-sm">Tk {{$ProductInfo->After_discount}} /-</span></div>
											</div>
										</div>
									</div>
								</div>

                                @empty

                                <div class="alert alert-danger ms-5">No Product Found</div>

                                @endforelse
								
								
								
								
								
								
								
							</div>
							<!-- row -->
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= All Product List ======================== -->
			
			<!-- ======================= Customer Features ======================== -->
			<section class="px-0 py-3 br-top">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shopping-basket"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Free Shipping</h5>
									<span class="text-muted">Capped at $10 per order</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="far fa-credit-card"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Secure Payments</h5>
									<span class="text-muted">Up to 6 months installments</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shield-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">15-Days Returns</h5>
									<span class="text-muted">Shop with fully confidence</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-headphones-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">24x7 Fully Support</h5>
									<span class="text-muted">Get friendly support</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
    
@endsection


@section('frontend_script')

<script>
    $("#search_btn").click(function(){
        var searchValue = $("#search_input").val();
        var min = $("#min").val();
        var max = $("#max").val();
        var categoryInfo = $('input[class="categoryInfo"]:checked').attr('value');
        var link = "{{route('searchPage')}}" +"?q=" + searchValue + "&min=" + min + "&max=" + max + "&categoryInfo=" + categoryInfo;
        window.location.href = link;
    }); 
    
    
    $("#minMax_btn").click(function(){
        var searchValue = $("#search_input").val();
        var min = $("#min").val();
        var max = $("#max").val();
        var link = "{{route('searchPage')}}" +"?q=" + searchValue + "&min=" + min + "&max=" + max;
        window.location.href = link;
    });
</script>
    
@endsection