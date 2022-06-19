
@extends('layouts.admin.app')

@section('content')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">Category Manage</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Trainers</li>
                   <li class="breadcrumb-item active"><a href="#">Create Trainers</a></li>
               </ol>
           </div>
       </div>
   </div>
   <!-- END: Breadcrumbs-->

   <!-- START: Card Data-->
   <div class="pull-right">
     <a href="#"class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center" data-toggle="modal" data-target="#newcategory">
                       <i class="icon-plus align-middle text-white"></i> <span class="d-none d-xl-inline-block">Add New Category </span>
                   </a>
   </div>
   <div class="row">
       <div class="col-12 mt-3">
           <div class="card">
               <div class="card-header  justify-content-between align-items-center">                               
                   <h4 class="card-title">Trainers Data</h4> 
                    <div class="pull-right">
                       
                    </div>
               </div>
               
               <div class="card-body">
                   <div class="table-responsive">
                       <table  id="categoryTable" class="display table dataTable table-striped table-bordered" >
                           <thead>
                               <tr>
                                   <th>Trainer Name</th>
                                   <th>Image</th>
                                   <th>Title</th>
                                   <th>Dscription</th>
                                   <th>Date</th>

                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($subtrainer as $row)
                              
                                    
                                   
                                   <td>
                                    <img src="{{asset($row->image)}}" style="height: 60px; width:60px;">     
                                   </td> 
                                   <td>{{$row->trainer_name}}</td> 
                                   <td>{{$row->title}}</td> 
                                   <td>{!!$row->description!!}</td> 
                                   <td>{{$row->date}}</td> 
                                   <td>
                                     
                                     <a href="{{ url('edit/subtrainers/'.$row->id) }}" class="btn btn-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i>Edit</a>
                                     <a href="{{ url('delete/subtrainers/'.$row->id) }}"  class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash">Delete</i></a>
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
<!-- Add Category Add Model  -->
<div class="modal fade" id="newcategory">
   <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title">
                   <i class="icon-pencil"></i> Add Category
               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <i class="icon-close"></i>
               </button>
           </div>
            <form class="add-contact-form" method="post" action="{{ route('store.trainers') }}"enctype="multipart/form-data">    
               @csrf
               <div class="modal-body">  
                <p>
                    <label for="exampleInputEmail1">Category </label>
                   
                     <select class="form-control" name="trainer_id">
                      <option selected disabled>Select Trainer</option>
                     @foreach($train as $row)
                     <option value="{{ $row->id }}"> {{ $row->trainer_name }} </option>
                     @endforeach
                   </select>
                </p>  
                <div class="form-group row">
                    
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                    </div>
                    </br>
                    </br>
                    </br>
                    <div class="col-sm-12">
                        <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                    </div>
                </br>
            </br>
            </br>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="title" placeholder="Title" name="date">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="modal-body">    
                                <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">                               
                                    <h4 class="card-title"> Description</h4>                                   
                                </div>
                                <div class="card-body">
                                    <textarea  class="summernote" required name="description"></textarea>
                                </div>
                            </div>
                            </div>
                       </div>
                    </div>
                </div>
          

               </div>
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary add-todo">Add Category</button>
               </div>
           </form>
       </div>
   </div>
</div>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(50)
                    .height(50);
            };
            reader.readAsDataURL(input.files[0]);
        }
     }
  </script>
  <script>  
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to delete?",
             text: "Once Delete, This will be Permanently Delete!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Safe Data!");
             }
           });
       });
</script>

@endsection