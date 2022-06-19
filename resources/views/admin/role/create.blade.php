
@extends('layouts.admin.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
@section('content')
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
    <!-- START: Breadcrumbs-->
    <div class="row ">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Basic Form</h4></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Form</li>
                    <li class="breadcrumb-item active"><a href="#">Basic</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END: Breadcrumbs-->

    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-header">                               
                    <h6 class="card-title">Form Inputs</h6>                                
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">                                           
                            <div class="col-12">
                                <form class="add-contact-form" method="post" action="{{ route('store.admin') }}"enctype="multipart/form-data">    
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control rounded" id="inputEmail4" placeholder="Name" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="product_code">Email<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="product_code" placeholder="Email " name="email">
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Phone <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control rounded" id="inputEmail4" placeholder="Phone" name="phone">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="product_code">Password<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="product_code" placeholder="Password" name="password">
                                        </div>
                                    </div>  

                                  <hr>


                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="category">
                                                    <label for="minimal-checkbox-disabled2">Category</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="coupon">
                                                    <label for="minimal-checkbox-disabled2">Coupon</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="product">
                                                    <label for="minimal-checkbox-disabled2">Product</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                     
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="blog">
                                                    <label for="minimal-checkbox-disabled2">Blog</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="order">
                                                    <label for="minimal-checkbox-disabled2">Order</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="report">
                                                    <label for="minimal-checkbox-disabled2">Report</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                     
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="role">
                                                    <label for="minimal-checkbox-disabled2">Role</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="return">
                                                    <label for="minimal-checkbox-disabled2">Return</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="contact">
                                                    <label for="minimal-checkbox-disabled2">Contact</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                     
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="comment">
                                                    <label for="minimal-checkbox-disabled2">Comment</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="setting">
                                                    <label for="minimal-checkbox-disabled2">Setting</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="stock">
                                                    <label for="minimal-checkbox-disabled2">Stock</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                     
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="other">
                                                    <label for="minimal-checkbox-disabled2">Other</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                       
                                        <div class="form-group col-md-4">
                                            <div class="custom-control custom-checkbox">
                                                <div class="form-group col-md-6 custom-control custom-checkbox">
                                                    <input type="checkbox" id="minimal-checkbox-disabled2"value="1" name="newslatter">
                                                    <label for="minimal-checkbox-disabled2">Newslatter</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                       
                                        
                                       
                                     
                                    </div>
                                    

                                   
                                    <button style="float: center;" type="submit" class="btn btn-primary">Save </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
</div>
</main>
<!-- END: Content-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>


@endsection