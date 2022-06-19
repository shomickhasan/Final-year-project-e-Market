@php
	$settings=DB::table('settings')->where('id',1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 10:10:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>E-Market</title>
	<meta name="csrf" value="{{ csrf_token() }}">
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
   
    <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('user/')}}/css/bootstrap/css/bootstrap.min.css">
	<link href="{{ asset('user/')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('user/')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/lib.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/js/lightslider/lightslider.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="{{ asset('user/')}}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{ asset('user/')}}/css/themecss/so-categories.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/just_purchased_notification.css" rel=stylesheet>

	<link href="{{ asset('user/')}}/css/footer1.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/header1.css" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('user/')}}/css/theme.css" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('user/')}}/css/theme.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/responsive.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<link rel="stylesheet" href="sweetalert2.min.css">


	{{--  new css   --}}

	
	<link rel="stylesheet" href="{{ asset('user/csss/new.css') }}">
	<link rel="stylesheet" href="{{ asset('user/csss/revision.css') }}">
	
	
</head>


	


	
   


<body class="">
		


    <div id="wrapper" class="wrapper-full banners-effect-7">
	
	

	<!-- Header Container  -->
	<header id="header" class=" variantleft type_1">
<!-- Header Top -->
<div class="header-top ">
	<div class="container">
		<div class="row">
			<div class="header-top-left form-inline col-sm-6 col-xs-12 ">
				<div class="form-group languages-block ">
					<form action="https://demo.smartaddons.com/templates/html/market/index.html" method="post" enctype="multipart/form-data" id="bt-language">
						<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<img src="{{ asset('user/')}}/image/demo/flags/gb.png" alt="English" title="English">
							<span class="">English</span>
							<span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index-2.html"><img class="image_flag" src="{{ asset('user/')}}/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
							<li> <a href="index-2.html"> <img class="image_flag" src="{{ asset('user/')}}/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
						</ul>
					</form>
				</div>

				<div class="form-group currencies-block">
					<form action="https://demo.smartaddons.com/templates/html/market/index.html" method="post" enctype="multipart/form-data" id="currency">
						<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu btn-xs">
							<li> <a href="#">(€)&nbsp;Euro</a></li>
							<li> <a href="#">(£)&nbsp;Pounds	</a></li>
							<li> <a href="#">($)&nbsp;US Dollar	</a></li>
						</ul>
					</form>
				</div>
			</div>
			<div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 ">
				<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
				<div class="tabBlock" id="TabBlock-1">
					<ul class="top-link list-inline">
						@guest
						<li class="account" id="my_account">
							<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a></li>
								<li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
							</ul>
						</li>
						@else
						<li class="account" id="my_account">
							<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Profile</span> <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> Profile</a></li>
								<li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out" ></i> Logout</a>
                                 
								</li>
							</ul>
						</li>
						@php 
                            $wishlist=DB::table('wishlist')->where('user_id',Auth::id())->get();
                         @endphp
						<li class="wishlist"><a href="{{ route('user.wishlist') }}" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List ({{ count($wishlist) }})</span></a></li>
						<li class="checkout"><a href="{{ route('user.checkout') }}" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
						<li class="login"><a href="#"title="My Order Tracking" data-toggle="modal" data-target="#exampleModal">
                             
							<span >My Order Trackingt</span></a>
							
						 </li>
						@endguest
						

						  
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Header Top -->
@php
 $category=DB::table('category')->get();	
@endphp
<!-- Header center -->
<div class="header-center left">
	<div class="container">
		<div class="row">
			<!-- Logo -->
			<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
				<a href="/"><img src="{{ asset($settings->logo)}}" style="height:80px;width: 120px;" /></a>
			</div>
			<!-- //end Logo -->

			{{--  <form action="{{ route('product.search') }}" class="header_search_form clearfix" method="post">
                                        @csrf
                                        <input type="search" required="required" class="header_search_input" placeholder="Search for products..." name="search">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list">
                                                <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                    @foreach($category as $row)
                                                    <li><a class="clc" href="#">{{ $row->category_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('public/frontend/images/search.png') }}" alt=""></button>
                                    </form> --}}

			<!-- Search -->
			<div id="sosearchpro" class="col-sm-7 search-pro">
				<form action="{{ route('product.search') }}"method="post">
					@csrf
					<div id="search0" class="search input-group">
						<div class="select_category filter_type icon-select">
							<select class="no-border" name="category_id">
								<option selected disabled>All Categories</option>
								@foreach($category as $row)
								<option value="78">{{ $row->categoty_name }}</option>
								@endforeach
								
							</select>
						</div>

						<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
						<span class="input-group-btn">
						<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
						</span>
					</div>
					<input type="hidden" name="route" value="product/search" />
				</form>
			</div>
			<!-- //end Search -->

			<!-- Secondary menu -->
			<div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right">
				<!--cart-->
				<div id="cart" class=" btn-group btn-shopping-cart">
					<a href="{{ route('show.cart') }}" class="top_cart">
						<div class="shopcart">
							<span class="handle pull-left"></span>
							<span class="title">My cart</span>
							<p class="text-shopping-cart cart-total-full">{{ Cart::count() }} item(s) - ট{{ Cart::Subtotal() }} </p>
						</div>
					</a>
{{-- 
					<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
						
						<li>
							<table class="table table-striped">
								<tbody>
									<tr>
										<td class="text-center" style="width:70px">
											<a href="product.html"> <img src="{{ asset('user/')}}/image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
										</td>
										<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
										<td class="text-center"> x1 </td>
										<td class="text-center"> $1,202.00 </td>
										<td class="text-right">
											<a href="product.html" class="fa fa-edit"></a>
										</td>
										<td class="text-right">
											<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
										</td>
									</tr>
									<tr>
										<td class="text-center" style="width:70px">
											<a href="product.html"> <img src="{{ asset('user/')}}/image/demo/shop/product/resize/3.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
										</td>
										<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
										<td class="text-center"> x1 </td>
										<td class="text-center"> $60.00 </td>
										<td class="text-right">
											<a href="product.html" class="fa fa-edit"></a>
										</td>
										<td class="text-right">
											<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li>
							<div>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td class="text-left"><strong>Sub-Total</strong>
											</td>
											<td class="text-right">$1,060.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>Eco Tax (-2.00)</strong>
											</td>
											<td class="text-right">$2.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>VAT (20%)</strong>
											</td>
											<td class="text-right">$200.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>Total</strong>
											</td>
											<td class="text-right">$1,262.00</td>
										</tr>
									</tbody>
								</table>
								<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
							</div>
						</li>
					</ul> --}}
				</div>
				<!--//cart-->
			</div>
		</div>

	</div>
</div>
<!-- //Header center -->


{{-- @yield('slider') --}}


@yield('content')

	

<script type="text/javascript"><!--
	var $typeheader = 'header-home1';
	//-->
</script>

	<!-- Footer Container -->
	<footer class="footer-container type_footer1">
		<!-- Footer Top Container -->
		<section class="footer-top">
			<div class="container content">
				<div class="row">
					<div class="col-sm-6 col-md-3 box-information">
						<div class="module clearfix">
							<h3 class="modtitle">Information</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="order-history.html">Order history</a></li>
									<li><a href="order-information.html">Order information</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-service">
						<div class="module clearfix">
							<h3 class="modtitle">Customer Service</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="return.html">Returns</a></li>
									<li><a href="sitemap.html">Site Map</a></li>
									<li><a href="my-account.html">My Account</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-account">
						<div class="module clearfix">
							<h3 class="modtitle">My Account</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="#">Brands</a></li>
									<li><a href="gift-voucher.html">Gift Vouchers</a></li>
									<li><a href="#">Affiliates</a></li>
									<li><a href="#">Specials</a></li>
									<li><a href="#" target="_blank">Our Blog</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 collapsed-block ">
						<div class="module clearfix">
							<h3 class="modtitle">Contact Us	</h3>
							<div class="modcontent">
								<ul class="contact-address">
									<li><span class="fa fa-map-marker"></span> {{ $settings->address }}</li>
									<li><span class="fa fa-envelope-o"></span> Email: <a href="#"> {{ $settings->email }}</a></li>
									<li><span class="fa fa-phone">&nbsp;</span> Phone 1: {{ $settings->phone }} <br>Phone 2: {{ $settings->phone_optional }}</li>
								</ul>
							</div>
						</div>
					</div>

@php  
  $category=DB::table('category')->get();
@endphp
					<div class="col-sm-12 collapsed-block footer-links">
						<div class="module clearfix">
							<div class="modcontent">
								<hr class="footer-lines">
								<div class="footer-directory-title">
									<h4 class="label-link">Top Stores : Brand Directory | Store Directory</h4>
									<ul class="footer-directory">
										@foreach($category as $cat)
										<li>
											
											<h4>{{ $cat->categoty_name }}:</h4>
											@php  
											$subcategory=DB::table('subcategory')->where('category_id',$cat->id)->get();
										    @endphp
											@foreach($subcategory as $row)
											
											<a href="{{ url('products/'.$row->id) }}">{{$row->subcategory_name}}</a> |
											@endforeach
										</li>
										@endforeach
										
										
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Footer Top Container -->
		
		<!-- Footer Bottom Container -->
		<div class="footer-bottom-block ">
			<div class=" container">
				<div class="row">
					<div class="col-sm-5 copyright-text"> © 2021 Dipak. All Rights Reserved. </div>
					<div class="col-sm-7">
						<div class="block-payment text-right"><img src="{{ asset('user/')}}/image/demo/content/payment.png" alt="payment" title="payment" ></div>
					</div>
					<!--Back To Top-->
					<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

				</div>
			</div>
		</div>
		<!-- /Footer Bottom Container -->
		
		
	</footer>
	<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
	<ul class="items">
		<li class="facebook"> <a href="{{ $settings->facebook }}" class="tab-icon"><span class="fa fa-facebook"></span></a>
			{{-- <div class="tab-content">
				<div class="title">
					<h5>FACEBOOK</h5>
				</div>
				<div class="loading">
					<img src="{{ asset('user/')}}/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div> --}}
		</li>
		<li class="twitter"> <a href="{{ $settings->twitter }}" class="tab-icon"><span class="fa fa-twitter"></span></a>
			{{-- <div class="tab-content">
				<div class="title">
					<h5>TWITTER FEEDS</h5> 
				</div>
				<div class="loading">
					<img src="{{ asset('user/')}}/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div> --}}
		</li>
		<li class="youtube"> <a href="{{ $settings->youtoube }}" class="tab-icon"><span class="fa fa-youtube"></span></a>
			{{-- <div class="tab-content">
				<div class="title">
					<h5>YouTube</h5>
				</div>
				<div class="loading"> <img src="{{ asset('user/')}}/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
			</div> --}}
		</li>
	</ul>
</section>	<!-- End Social widgets -->
 <!-- Order Tracking Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Status Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="{{ route('order.tracking') }}">
             @csrf
             <div class="form-row">
                  <label>Status Code</label>
                   <input type="text" name="code" required="" class="form-control" placeholder="Your Order Status Code">
             </div><br>
             <button class="btn btn-primary" type="submit">Track Now</button>                 
         </form>
      </div>
    </div>
  </div>
</div>
	

<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('user/')}}/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/libs.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/bootstrap-notify.min.js"></script>

<!-- Theme files
============================================ -->
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/application.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/homepage.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/addtocart.js"></script>	
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
	@if(Session::has('message'))
		  var type="{{Session::get('alert-type','info')}}"

	
		  switch(type){
				case 'info':
				   toastr.info("{{ Session::get('message') }}");
				   break;
			case 'success':
				toastr.success("{{ Session::get('message') }}");
				break;
		  case 'warning':
				toastr.warning("{{ Session::get('message') }}");
				break;
			case 'error':
				  toastr.error("{{ Session::get('message') }}");
				  break;
		  }
	@endif
</script>



</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/market/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 10:10:48 GMT -->
</html>
