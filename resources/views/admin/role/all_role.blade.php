
@extends('layouts.admin.app')

@section('content')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">subscribe Manage</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Category</li>
                   <li class="breadcrumb-item active"><a href="#">Create Category</a></li>
               </ol>
           </div>
       </div>
   </div>
   <!-- END: Breadcrumbs-->


   <div class="row">
       <div class="col-12 mt-3">
           <div class="card">
               <div class="card-header  justify-content-between align-items-center">                               
                   <h4 class="card-title">Category Data</h4> 
                    <div class="pull-right">
                       
                    </div>
               </div>
               
               <div class="card-body">
                   <div class="table-responsive">
                       <table  id="categoryTable" class="display table dataTable table-striped table-bordered" >
                           <thead>
                               <tr>

                                  <th class="wd-15p">Name</th>
                                  <th class="wd-15p">Phone</th>
                                  <th class="wd-15p">Access</th>
                                  <th class="wd-20p">Action</th>

                               </tr>
                           </thead>
                           <tbody>
                            @foreach($user as $row)
                              <tr>
                                   <td>{{ $row->name }}</td>
                                  <td>{{ $row->phone }}</td>
                                  <td>
                                    @if($row->category == 1)
                                         <span class="badge badge-danger">Category</span>
                                      @else
                                      @endif   
                                       @if($row->coupon == 1)
                                         <span class="badge badge-success">coupon</span>
                                      @else
                                      @endif 

                                      @if($row->product == 1)
                                         <span class="badge badge-info">product</span>
                                      @else
                                      @endif 

                                      @if($row->blog == 1)
                                         <span class="badge badge-warning">blog</span>
                                      @else
                                      @endif 

                                      @if($row->order == 1)
                                         <span class="badge badge-primary">order</span>
                                      @else
                                      @endif

                                      @if($row->other == 1)
                                         <span class="badge badge-danger">other</span>
                                      @else
                                      @endif

                                      @if($row->report == 1)
                                         <span class="badge badge-success">report</span>
                                      @else
                                      @endif
                                       @if($row->stock == 1)
                                         <span class="badge badge-danger">stock</span>
                                      @else
                                      @endif

                                      @if($row->role == 1)
                                         <span class="badge badge-info">role</span>
                                      @else
                                      @endif

                                      @if($row->return == 1)
                                         <span class="badge badge-warning">return</span>
                                      @else
                                      @endif

                                      @if($row->contact == 1)
                                         <span class="badge badge-primary">contact</span>
                                      @else
                                      @endif

                                      @if($row->comment == 1)
                                         <span class="badge badge-danger">comment</span>
                                      @else
                                      @endif

                                      @if($row->setting == 1)
                                         <span class="badge badge-success">setting</span>
                                      @else
                                      @endif

                                  </td>
                                  <td>
                                    <a href="{{ URL::to('delete/admin/'.$row->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-pencil"></i>Delete</a>
                                  </td>
                              </tr>
                              @endforeach
                                            
                              
                           </tbody>
                         
                       </table>
                   </div>
               </div>
           </div> 

       </div>                  
   </div>
   <!-- END: Card DATA-->
</div>
</main>



@endsection