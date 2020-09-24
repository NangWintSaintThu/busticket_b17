@extends('master')
@section('content')
 <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
   </div>
  </div>
  
  <div class="container my-5">
     <h1 class="text-center text-dark">User Information For Booking</h1>
      <form action="{{route('travellerinfos.store')}}" method="post">
     {{--  <div class="col-lg-4 col-md-6 d-flex" style="margin-top: 100px;"> --}}
       
          @csrf
          <input type="hidden" name="route_id" value="{{$route_id}}">
          <input type="hidden" name="no_people" value="{{$no_people}}">
          <input type="hidden" name="total" value="{{$total}}">
          <input type="hidden" name="seat_no" value="{{$seat_no}}">
          <input type="hidden" name="departure_date" value="{{$departure_date}}">

    <div class="row justify-content-center">

      <div class="col-5">
        
        <div class="form-group">
                <label class="small mb-1" for="inputname">Name</label>
                <input class="form-control py-4" id="inputname" type="name" placeholder="Enter Your Name" name="name" >
              </div>

               <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email">
              </div>

              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
              </div>
             {{--  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
 --}}
              	<div class="form-group">
                <label class="small mb-1" for="inputname">Phone Number</label>
                <input class="form-control py-4" id="inputphonenumber" type="phonenumber" placeholder="Enter Your Phone Number" name="phonenumber">
              </div>

               <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Address</label>
                <input class="form-control py-4" id="inputEmailAddress" type="textarea" placeholder="Enter your address" name="textarea">
              </div>

               <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                   
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Book Now</button>
              </div>
            </div>
        </div>
      </form>
    </div>
    


@endsection
