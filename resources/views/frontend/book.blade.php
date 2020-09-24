@extends('master')
@section('content')


<div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        </div>
  </div>

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h1 class="h3 mb-0 text-gray-800 d-inline-block">Booking Detail </h1>
            
        </div>
    </div>
    
    
    <div class="row m-2">

             <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Departure Station</th>
                            <th>Arrival Station</th>
                            <th>No People</th>
                            <th>Seat No</th>
                            <th>Total</th>
                            <th>Departure Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($bookingdetails as $bookingdetail)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$bookingdetail->travllerinfo->user->name}}</td>
                            <td>{{$bookingdetail->travllerinfo->user->email}}</td>
                            <td>{{$bookingdetail->travllerinfo->phone_no}}</td>

                            <td>{{$bookingdetail->route->depature->name}}</td>
                            <td>{{$bookingdetail->route->arrival->name}}</td>
                            <td>{{$bookingdetail->no_people}}</td>
                            <td>{{$bookingdetail->seat_no}}</td>

                            <td>{{$bookingdetail->total}}</td>
                            <td>{{$bookingdetail->departure_date}}</td>


                        </tr>
                        @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
  
  {{--  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Booking Detail</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="row">
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="Width:100%;">
                  <thead>
                    <tr role="row">
                      <th>No</th>
                      <th>User Name</th>
                      <th>Leaving From</th>
                      <th>Going To</th>
                      <th>Departure Date</th>
                      <th>Time</th>
                      <th>Number of seat</th>
                      <th>Total</th>
                     
               
               </tr>
             </thead>
             <tbody>
               <tr>
                <th><input class="form-control" name="id" value="{{ $id }}"></th>
                <th><input class="form-control"  name="name" value="{{ $city_name }}"></th>
                 <th>
                  @foreach($cities as $city)
                  <input class="form-control"  name="leavingfrom" value="{{$city->name}}">
                   @endforeach 
                 </th>
                 <th>
                  @foreach($cities as $city)
                  <input class="form-control" name="goingto" value="{{$city->name}}">
                   @endforeach
                 </th>
                 <th><input  class="form-control" id="book_pick_date"  value='{{$city_date}}'></th>
                 <th><input  class="form-control" id="time_pick"  value='{{$city_time}}' name="city_time"></th>
                 <th><input class="form-control" name="" value="{{$city_seat}}"></th>
                  <th><input class="form-control" name="" value="{{$city_total}}"></th>
               </tr>
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
     @endsection    --}}