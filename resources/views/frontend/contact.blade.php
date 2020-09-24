@extends('master')
@section('content')
  {{-- <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white">Contact Us</h1>
      </div>
  </div> --}}
  
  <!-- Content -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
   </div>
  </div>
  
  <div class="container my-5">
     <h1 class="text-center text-dark">Contact Us</h1>
    <div class="row justify-content-center">
      <div class="col-5">
        
        <div class="form-group">
                <label class="small mb-1" for="inputname">Name</label>
                <input class="form-control py-4" id="inputname" type="name" placeholder="Enter Your Name" name="email" >
              </div>

               <div class="form-group">
                <label class="small mb-1" for="inputname">Phone Number</label>
                <input class="form-control py-4" id="inputphonenumber" type="phonenumber" placeholder="Enter Your PhoneNumber" name="phonenumber">
              </div>
                   
              <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email">
              </div>
              
              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
              </div>
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Send</button>
              </div>
            </div>
          </div>
        </div>
        
 @endsection