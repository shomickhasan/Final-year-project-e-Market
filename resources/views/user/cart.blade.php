
@php  
	$setting=DB::table('settings')->first();
	$charge=$setting->shipping_charge;
	$vat=$setting->vat;

@endphp
@extends('layouts.user.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@include('layouts.user.manubar')
	</header>
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Shopping Cart</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Color</td>
                    <td class="text-left">Size</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                    <td class="text-right">Action</td>
                  </tr>
                </thead>
                <tbody>
                	@foreach($cart as $row)
                  <tr>
                    <td class="text-center"><a href="product.html"><img width="70px" src="{{ asset( $row->options->image ) }}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">{{ $row->name }}</a><br />
                     </td>
                    <td class="text-left">{{ $row->options->color }}</td>
                    <td class="text-left">{{ $row->options->size }}</td>
                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                        <form method="post" action="{{ route('update.cartitem') }}">
							@csrf
							<input type="hidden" name="productid" value="{{ $row->rowId }}">
	                        <input type="text" name="qty" value="{{ $row->qty }}" size="1" class="form-control" />
	                        <span class="input-group-btn">
	                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
	                        </span></div>
                        </form>

                    </td>
                    <td class="text-right">ট {{ $row->price }}</td>
                    <td class="text-right">ট {{ $row->price*$row->qty }}</td>
                    <td>

                    	{{-- <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button> --}}
                    	<a href="{{ url('remove/cart/'.$row->rowId) }}" class="btn btn-danger text-center">X</a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          <h3 class="subtitle no-margin">What would you like to do next?</h3>
          <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        @if(Session::has('coupon'))
		@else
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Use Coupon Code 
							
							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
                
				<div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
					
					<div class="panel-body">
						 <form action="{{ route('apply.coupon') }}" method="post">
						  @csrf
						<label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
							<div class="input-group">
								<input required="" type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
								<span class="input-group-btn">
									<button type="submit" value="Apply Coupon" class="btn btn-primary">Apply Coupon</button> 
								</span>
							</div>
					   </form>
					</div>
					
				</div>
				
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Estimate Shipping &amp; Taxes 
							
							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<p>Enter your destination to get a shipping estimate.</p>
						<div class="form-horizontal">
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-country">Country</label>
								<div class="col-sm-10">
									<select name="country_id" id="input-country" class="form-control">
										<option value=""> --- Please Select --- </option>
										<option value="244">Aaland Islands</option>
										<option value="1">Afghanistan</option>
										<option value="2">Albania</option>
										<option value="3">Algeria</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
								<div class="col-sm-10">
									<select name="zone_id" id="input-zone" class="form-control">
										<option value=""> --- Please Select --- </option>
										<option value="3513">Aberdeen</option>
										<option value="3514">Aberdeenshire</option>
										<option value="3515">Anglesey</option>
										<option value="3516">Angus</option>
										<option value="3517">Argyll and Bute</option>
										<option value="3518">Bedfordshire</option>
										<option value="3519">Berkshire</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
								<div class="col-sm-10"><input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control"></div>
							</div>
								<button type="button" id="button-quote" data-loading-text="Loading..." class="btn btn-primary">Get Quotes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Use Gift Certificate 
							
							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-voucher" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
						<div class="input-group">
							<input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
							<span class="input-group-btn"><input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		<div class="row">
			<div class="col-sm-4 col-sm-offset-8">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td class="text-right">
								<strong>Sub-Total:</strong>
							</td>
							<td class="text-right">ট {{ Cart::Subtotal() }}</td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>Flat Shipping Rate:</strong>
							</td>
							<td class="text-right">ট {{ $charge }} </td>
						</tr>
						@if(Session::has('coupon'))
		
						<tr>
							<td class="text-right">
								<strong>Coupon Apply:  (-{{   Session::get('coupon')['discount'] }}ট ):</strong>
							</td>
							<td class="text-right">{{   Session::get('coupon')['name'] }}<a href="{{ route('coupon.remove') }}" class="btn btn-danger btn-sm">x</a> <span style=" margin-left: 5px;"></span></td></td>
						</tr>
						@else
						@endif
						<tr>
							<td class="text-right">
								<strong>VAT ({{ $vat }} ট):</strong>
							</td>
							<td class="text-right">ট {{ $vat }}</td>
						</tr>

                        @if(Session::has('coupon'))
						<tr>
							<td class="text-right">
								<strong>Total:</strong>
							</td>
							<td class="text-right">ট {{ Session::get('coupon')['balance']  }}</td>
						</tr>
						@else
						<tr>
							<td class="text-right">
								<strong>Total:</strong>
							</td>
							<td class="text-right">ট {{ Cart::Subtotal()  }}</td>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>

		 <div class="buttons">
            <div class="pull-left"><a href="{{ url('/') }}" class="btn btn-primary">Continue Shopping</a></div>
            <div class="pull-right"><a href="{{ route('user.checkout') }}" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>
        <!--Middle Part End -->
			
		</div>
	</div>
	<!-- //Main Container -->

@endsection
