@extends('layouts.user.app')
@php
$products=DB::table('products')->where('status',1)->orderBy('id','desc')->limit(100)->get(); 
$newproduct=DB::table('products')->where('status',1)->where('new_product',1)->where('post_creator',)->orderBy('id','desc')->limit(100)->get();
$SallarProduct=DB::table('products')->where('status',1)->where('post_creator',1)->orderBy('id','desc')->limit(100)->get();
@endphp
@php
 $slider=DB::table('slider')->first();	
@endphp
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@include('layouts.user.manubar')
</header>
@include('layouts.user.slider')
	<!-- Main Container  -->
	<div class="main-container container">
		
		<div class="row">
			<div id="content" class="col-sm-12">
			<div class="row justify-content-center">
					<div class="col-md-8"style="color:blue;font-size:150%">
						<marquee  direction="left" >
						All Product anmin and Saller 
				 
							</marquee>
					</div>
				</div>	
			<div class="module tab-slider titleLine">
				<h3 class="modtitle">All Product</h3>
				<div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
					<div class="loadeding"></div>
					<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1" data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap"> 
							<span class="ltabs-tab-selected">All  Product	</span> <span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
									<ul class="ltabs-tabs cf">
										<li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">All  Product						</span> </li>
									</ul>
								</div>
							</div>
							<!-- End Tabs-->
						</div>
						<div class="ltabs-items-container">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
								<div class="ltabs-items-inner ltabs-slider ">

									@foreach($products as $row)
									<div class="ltabs-item product-layout">
										<div class="product-item-container">
											<div class="left-block">
												<div class="product-image-container second_img ">
													<img src="{{ asset($row->image_one)}}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
													<img src="{{ asset($row->image_two)}}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
												</div>
												<!--Sale Label-->
												@if($row->discount_price == NULL)
												<span class="label label-new">New</span>
												@else
												@php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
												<span class="label label-sale">
												{{ intval($discount) }}%
											   </span>
												@endif
												
												
												<!--full quick view block-->
												<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="{{ url('product/popup/'.$row->id.'/'.$row->product_name) }}">  Quickview</a>
												<!--end full quick view block-->
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a></h4>		
													<div class="ratings">
														<div class="rating-box">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														</div>
													</div>
																		
													<div class="price">
														@if($row->discount_price == NULL)
			                                              
			                                              <span class="price-new">ট {{ $row->selling_price }}</span>
			                                            @else
			                                            @endif
			                                            @if($row->discount_price != NULL)
			                                              
			                                             <span class="price-old">ট {{ $row->selling_price }}</span>
			                                             <span class="price-new">ট {{ $row->discount_price }}</span>
			                                            @else
			                                            @endif
																 
													</div>
												</div>
											
												  <div class="button-group">
													<button class="addToCart addcart" type="button" data-toggle="tooltip" title="Add to Cart" data-id="{{ $row->id }}"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
													<button class="addwishlist wishlist"  title="Add to Wish List" data-id="{{ $row->id }}"><i class="fa fa-heart"></i></button>
													<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
												  </div>
											</div><!-- right block -->
										</div>
									</div>
									@endforeach			
								
								</div>
								
							</div>
							
						</div>
						<!--End Items-->
						
						
					</div>
					
				</div>
			</div>
				

			<div class="row justify-content-center">
					<div class="col-md-8"style="color:blue;font-size:150%">
						<marquee  direction="left" >
						New Product For Admin  
				 
							</marquee>
					</div>
           </div> 
				
				<div class="module tab-slider titleLine">
					<h3 class="modtitle">New Products</h3>
					<div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
						<div class="loadeding"></div>
						<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1" data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap"> 
							<span class="ltabs-tab-selected"> New Product</span> <span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
									<ul class="ltabs-tabs cf">
										<li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">New Product</span> </li>
										
									</ul>
								</div>
							</div>
							<!-- End Tabs-->
						</div>
						<div class="ltabs-items-container">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
								<div class="ltabs-items-inner ltabs-slider ">
									@foreach($newproduct as $pro)
									<div class="ltabs-item product-layout">
										<div class="product-item-container">
											<div class="left-block">
												<div class="product-image-container second_img ">
													<img src="{{ asset($pro->image_one)}}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
													<img src="{{ asset($pro->image_two)}}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
												</div>
												<!--Sale Label-->
												@if($pro->discount_price == NULL)
												<span class="label label-new">New</span>
												@else
												@php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
												<span class="label label-sale">
												{{ intval($discount) }}%
											   </span>
												@endif
												<!--full quick view block-->
												<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="{{ url('product/popup/'.$row->id.'/'.$row->product_name) }}">  Quickview</a>
												<!--end full quick view block-->
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $pro->product_name }}</a></h4>		
													<div class="ratings">
														<div class="rating-box">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														</div>
													</div>
																		
													<div class="price">
														@if($pro->discount_price == NULL)
			                                              
			                                              <span class="price-new">ট {{ $pro->selling_price }}</span>
			                                            @else
			                                            @endif
			                                            @if($pro->discount_price != NULL)
			                                              
			                                             <span class="price-old">ট {{ $pro->selling_price }}</span>
			                                             <span class="price-new">ট {{ $pro->discount_price }}</span>
			                                            @else
			                                            @endif		 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart addcart" type="button" data-toggle="tooltip" title="Add to Cart"  data-id="{{ $row->id }}"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
													<button class="addwishlist wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" data-id="{{ $row->id }}"><i class="fa fa-heart"></i></button>
													<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
												  </div>
											</div><!-- right block -->
										</div>
									</div>
									@endforeach
								</div>
								
							</div>
							<div class="ltabs-items items-category-18 grid" data-total="11">
								<div class="ltabs-loading"></div>

								
							</div>
							<div class="ltabs-items  items-category-25 grid" data-total="11">
								<div class="ltabs-loading"></div>
							</div>
						</div>
						<!--End Items-->
						
						
						</div>
					
					</div>
				</div>

{{-- @include('user.categoryproductlist') --}}

<div class="row justify-content-center">
					<div class="col-md-8"style="color:blue;font-size:150%">
						<marquee  direction="left" >
						New Product For Saller  
				 
							</marquee>
					</div>
           </div> 
                <div class="module tab-slider titleLine">
					<h3 class="modtitle">New Products</h3>
					<div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
						<div class="loadeding"></div>
						<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1" data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap"> 
							<span class="ltabs-tab-selected"> New Product</span> <span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
									<ul class="ltabs-tabs cf">
										<li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">New Product</span> </li>
										
									</ul>
								</div>
							</div>
							<!-- End Tabs-->
						</div>
						<div class="ltabs-items-container">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
								<div class="ltabs-items-inner ltabs-slider ">
									@foreach($SallarProduct as $pro)
									<div class="ltabs-item product-layout">
										<div class="product-item-container">
											<div class="left-block">
												<div class="product-image-container second_img ">
													<img src="{{ asset($pro->image_one)}}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
													<img src="{{ asset($pro->image_two)}}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
												</div>
												<!--Sale Label-->
												@if($pro->discount_price == NULL)
												<span class="label label-new">New</span>
												@else
												@php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
												<span class="label label-sale">
												{{ intval($discount) }}%
											   </span>
												@endif
												<!--full quick view block-->
												<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="{{ url('product/popup/'.$row->id.'/'.$row->product_name) }}">  Quickview</a>
												<!--end full quick view block-->
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $pro->product_name }}</a></h4>		
													<div class="ratings">
														<div class="rating-box">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														</div>
													</div>
																		
													<div class="price">
														@if($pro->discount_price == NULL)
			                                              
			                                              <span class="price-new">ট {{ $pro->selling_price }}</span>
			                                            @else
			                                            @endif
			                                            @if($pro->discount_price != NULL)
			                                              
			                                             <span class="price-old">ট {{ $pro->selling_price }}</span>
			                                             <span class="price-new">ট {{ $pro->discount_price }}</span>
			                                            @else
			                                            @endif		 
													</div>
												</div>
												
												  <div class="button-group">
													<button class="addToCart addcart" type="button" data-toggle="tooltip" title="Add to Cart"  data-id="{{ $row->id }}"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
													<button class="addwishlist wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" data-id="{{ $row->id }}"><i class="fa fa-heart"></i></button>
													<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
												  </div>
											</div><!-- right block -->
										</div>
									</div>
									@endforeach
								</div>
								
							</div>
							<div class="ltabs-items items-category-18 grid" data-total="11">
								<div class="ltabs-loading"></div>

								
							</div>
							<div class="ltabs-items  items-category-25 grid" data-total="11">
								<div class="ltabs-loading"></div>
							</div>
						</div>
						<!--End Items-->
						
						
						</div>
					
					</div>
				</div>

				
{{-- Category wise product show modoule  --}}
@php 
$cats=DB::table('category')->skip(3)->first();
$category_id=$cats->id;
$products_cat=DB::table('products')->where('category_id',$category_id)->where('status',1)->limit(16)->orderBy('id','DESC')->get();


@endphp
 <div class="related titleLine products-list grid module">
	<h3 class="modtitle">{{ $cats->categoty_name }} </h3>

	<div class="releate-products ">
		@foreach($products_cat as $cat_pro)
		<div class="product-layout">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="{{ $cat_pro->image_one }}"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="{{ $cat_pro->image_two }}"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					{{-- <span class="label label-sale">Sale</span> --}}
					@if($cat_pro->discount_price == NULL)
							<span class="label label-new">New</span>
					@else
					@endif
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="{{ url('product/details/'.$cat_pro->id.'/'.$cat_pro->product_name) }}">{{ $cat_pro->product_name }}</a></h4>		
						<div class="ratings">
							<div class="rating-box">
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
							</div>
						</div>
											
						<div class="price">
							@if($cat_pro->discount_price == NULL)
	                          
	                          <span class="price-new">ট {{ $cat_pro->selling_price }}</span>
	                        @else
	                        @endif
	                        @if($cat_pro->discount_price != NULL)
	                          
	                         <span class="price-old">ট {{ $cat_pro->selling_price }}</span>
	                         <span class="price-new">ট {{ $cat_pro->discount_price }}</span>
	                        @else
	                        @endif	 
	                        @if($cat_pro->discount_price == NULL)
							@else
							@php
                            $amount=$row->selling_price - $row->discount_price;
                            $discount=$amount/$row->selling_price * 100;
                            @endphp 
							<span class="label label-percent">
							{{ intval($discount) }}% OFF
						   </span>
							@endif
							    
						</div>
						<div class="description item-desc hidden">
							<p>{{ $cat_pro->product_details }}</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart addcart" type="button" data-toggle="tooltip" title="Add to Cart"  data-id="{{ $row->id }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="addwishlist wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" data-id="{{ $row->id }}"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
		@endforeach
		
	</div>
</div>

{{-- Category wise product show  end --}}



				{{-- Category Show  --}}
				
				


				

				




@php
 $categorys=DB::table('category')->get();	
@endphp
				<div class="module no-margin titleLine ">
					<h3 class="modtitle">COLLECTIONS</h3>
					<div class="modcontent clearfix">
						<div id="collections_block" class="clearfix  block">
							<ul class="width6">
								@foreach($categorys as $cats)
								<li class="collect collection_0">
									<div class="color_co"><a href="#">{{ $cats->categoty_name }}</a> </div>
								</li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- //Main Container -->















  <!-- Category -->

	<!-- Block Spotlight3  -->
{{-- 	<section class="so-spotlight3">
		<div class="container">
			<div class="row">
				
				<div id="so_categories_173761471880018" class="so-categories module titleLine preset01-4 preset02-3 preset03-3 preset04-1 preset05-1">
					<h3 class="modtitle">Hot Categories</h3>
					
					<div class="wrap-categories">
						<div class="cat-wrap theme3">
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/automotive-motocrycle.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 								
								</div>
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Automotive " target="_blank">Automotive</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">More Car Accessories		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Car Alarms and Security		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Car Audio &amp; Speakers		</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Gadgets &amp; Auto Parts	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/health-beauty.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health & Beauty" target="_blank">Health & Beauty</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Salon & Spa Equipment		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Fragrances		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Shaving & Hair Removal..	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Bath & Body	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/bags-holiday-supplies-gifts.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health & Beauty" target="_blank">Bags, Holiday Supplies</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Gift & Lifestyle Gadgets..		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Lighter & Cigar Supplies..		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Gift for Woman	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Gift for Man	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr3"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/toys-hobbies.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health & Beauty" target="_blank">Toys & Hobbies</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Helicopters & Parts		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">RC Cars & Parts	</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">FPV System & Parts	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Walkera	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2 clr4"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/electronics.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health & Beauty" target="_blank">Electronics</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Home Audio</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Mp3 Players & Accessories..	</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Headphones, Headsets</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Battereries & Chargers..	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr5"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/jewelry-watches.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health & Beauty" target="_blank">Jewelry & Watches</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Men Watches	</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Wedding Rings		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Earings	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2 clr3 clr6"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/sports-outdoors.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health & Beauty" target="_blank">Sports & Outdoors</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Outdoor & Traveling	</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Camping & Hiking		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Golf Supplies	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Fishing	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="{{ asset('user/')}}/image/demo/shop/category/smartphone-tablets.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health & Beauty" target="_blank">Smartphone & Tablets</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Accessories for iPhone		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Accessories for i Pad	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Accessories for Tablet PC	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2 clr4"></div>
						</div>
					</div>
				</div>
			
				
			</div>
		</div>
	</section> --}}
	<!-- //Block Spotlight3  -->
	<script type="text/javascript">
      $(document).ready(function() {
            $('.addwishlist').on('click', function(){  
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/wishlist/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }

                     },
                    
                 });
                 
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>
{{--  card add --}}
	<script type="text/javascript">
      $(document).ready(function() {
            $('.addcart').on('click', function(){  
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/to/cart/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }
                     },
                 });
                 //alert(id)
                 
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>
@endsection


