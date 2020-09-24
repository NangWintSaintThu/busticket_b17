@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          	<div class="row">
          		<div class="col">
          			<h1 class="h3 mb-0 text-gray-800">Bus Company Create Form</h1>
          		</div>
          	</div>
           </div> 
            <div class="row">
            	<div class="col-md-12">
            		<form action="{{route('buscompanies.store')}}" method="post" enctype="multipart/form-data">
            			@csrf

            <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
              <label for="inputname" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-5">
                <input type="text" id="inputname" name="name" class="d-block form-control">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
            </div>
            <div class="form-group row {{ $errors->has('phoneno') ? 'has-error' : '' }}">
              <label for="inputpno" class="col-sm-2 col-form-label">Phone No</label>
              <div class="col-sm-5">
                <input type="text" id="inputpno" name="phoneno" class="d-block form-control">
                <span class="text-danger">{{ $errors->first('phoneno') }}</span>
              </div>
            </div>
            <div class="form-group row {{ $errors->has('logo') ? 'has-error' : '' }}">
              <label for="inputlogo" class="col-sm-2 col-form-label">Logo</label>
              <div class="col-sm-5">
                <input type="file" id="inputlogo" name="logo" class="d-block form-control-file">
                <span class="text-danger">{{ $errors->first('logo') }}</span>
              </div>
            </div>
            <div class="form-group row {{ $errors->has('ownername') ? 'has-error' : '' }}">
              <label for="inputowner" class="col-sm-2 col-form-label">Owner Name</label>
              <div class="col-sm-5">
                <input type="text" id="inputowner" name="ownername" class="d-block form-control">
                <span class="text-danger">{{ $errors->first('ownername') }}</span>
              </div>
            </div>
            <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
              <label for="inputaddress" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-5">
                <input type="text" id="inputaddress" name="address" class="d-block form-control">
                <span class="text-danger">{{ $errors->first('address') }}</span>
              </div>
            </div>
            

  
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
            		
            	
            
        
            
@endsection