@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          	<div class="row">
          		<div class="col">
          			<h1 class="h3 mb-0 text-gray-800">City Edit Form</h1>
          		</div>
          	</div>
           </div> 
            <div class="row">
            	<div class="col-md-12">
            		<form action="{{route('cities.update',$city->id)}}" method="post" enctype="multipart/form-data">
            			@csrf
            			@method('PUT')
 {{--  <div class="form-group row">
    <label for="inputid" class="col-sm-2 col-form-label" >Id</label>
    <div class="col-sm-10">
      <input type="id" class="form-control" id="inputid" name="id" value="{{$city->id}}">
    </div>
  </div> --}}
  <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label" >Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputname" name="name" value="{{$city->name}}">
    </div>
  </div>
  
  
   <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
            		
            	
            
        
            
@endsection