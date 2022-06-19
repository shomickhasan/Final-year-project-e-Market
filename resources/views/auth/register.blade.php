{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


 @extends('layouts.user.app')

@section('content')
    
    @include('layouts.user.manubar')
    </header>
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Register</a></li>
        </ul>
        
        <div class="row">
            <div id="content" class="col-sm-12">
                <h2 class="title">Register Account</h2>
                <p>If you already have an account with us, please login at the <a href="#">login page</a>.</p>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                @csrf
                    <fieldset id="account">
                        <legend>Your Personal Details</legend>
                        <div class="form-group required" style="display: none;">
                            <label class="col-sm-2 control-label">Customer Group</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="First Name" id="input-firstname" class="form-control" name="name" required="">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text"   placeholder="Last Name" id="input-lastname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" placeholder="E-Mail" id="input-email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                            <div class="col-sm-10">
                                <input type="tel"   placeholder="Telephone" id="input-telephone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-fax">Fax</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="Fax" id="input-fax" class="form-control">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="address">
                        <legend>Your Address</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-company">Company</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="Company" id="input-company" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="Address 1" id="input-address-1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="Address 2" id="input-address-2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">City</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="City" id="input-city" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="Post Code" id="input-postcode" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-country">Country</label>
                            <div class="col-sm-10">
                                <select  id="input-country" class="form-control">
                                    <option disabled="" selected=""> Please Select Country</option>
                                    <option value="244">Bangladesh</option>
                                    <option value="1">India</option>
                                    <option value="2">Japan</option>
                                    <option value="3">London</option>
                                    <option value="4">American</option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-zone">Region / State</label>
                            <div class="col-sm-10">
                                <select  id="input-zone" class="form-control">
                                    <option selected="" disabled="">Please Select Region</option>
                                    <option value="3513">Islam</option>
                                    <option value="3514">Hindu</option>
                                    <option value="3515">Ctistan</option>
                                    <option value="3516">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-country">Country</label>
                            <div class="col-sm-10">
                                <select  name="user_roll" class="form-control">
                                    <option disabled="" selected=""> Please Select Country</option>
                                    <option value="3">Saller</option>
                                    <option value="2">Bayer</option>
                                    
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Your Password</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password" id="input-password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password Confirm" id="input-confirm" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                    </fieldset>
            
                    <div class="buttons">
                        <div class="pull-right"><a href="#" class="agree"><b></b></a>
                            
                            
                            <button type="submit" class="btn btn-primary">Registaer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection