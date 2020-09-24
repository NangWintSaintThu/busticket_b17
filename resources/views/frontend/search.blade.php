@extends('master')
@section('content')

<div class="container mt-5 mb-3">          
  <div class="row mt-5" style="margin-top: 150px !important;">
        <div class="col-md-12">

    
         {{--  <div class="col-lg-12 col-md-6 mt-0 mt-md-5 d-flex mt-5"> --}}


            <div class="container mt-5"> 
             <div class="row">
              <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate mb-5">
                  <form action="#" class="search-property-1">
                    <div class="row">
                      <div class="col-md-3 align-items-end">
                        <div class="form-group">
                          <label for="#">Leaving From</label>
                          <div class="form-field">
                            <div class="select-wrap">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select class="form-control" name="leavingfrom">
                               @foreach($cities as $city)
                               <option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$leavingfrom) {{'selected'}} @endif>{{$city->name}}</option>
                               @endforeach 
                             </select>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col-md-3 align-items-end">
                      <div class="form-group">
                        <label for="#">Going To</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select class="form-control" name="goingto">
                             @foreach($cities as $city)

                               <option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$goingto) {{'selected'}} @endif>{{$city->name}}</option>
                               @endforeach  


                               

                           </select>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3 align-items-end">
                    <div class="form-group">
                      <label for="" class="label">Departure date</label>
                      <input type="text" class="form-control" id="book_pick_date"  value='{{$city_date}}'>
                    </div>
                  </div>
             
                  <div class="col-md-3 align-items-end">
                    <div class="form-group">
                      <label for="#">Number of seat</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="city_seat" id="" class="form-control">
                           <option class="selected">{{$city_seat}}</option>
                           <option value="">1</option>
                           <option value="">2</option>
                           <option value="">3</option>
                           <option value="">4</option>
                           <option value="">5</option>
                           <option value="">6</option>

                         </select>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
 </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">Bus for this route</h2>   
    </div>
  </div>
</div>

@foreach($routes as $route)
@if($route)
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class=" card shadow">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 ">
              <img src="{{asset($route->bus_type->logo)}}" width="120px" height="100px">
            </div>
            <div class="col-md-4">
              <h4>{{$route->bus_type->name}}</h4>
              <p>{{$route->depature->name}} - {{$route->arrival->name}}</p>
            </div>

            <div class="col-md-4">
              <form action="{{route('seatpage')}}" method="post" class="d-inline-block">
                @csrf
                <input type="hidden" name="leavingfrom" value="{{$leavingfrom}}">
                <input type="hidden" name="city_date" value="{{$city_date}}">

                <input type="hidden" name="goingto" value="{{$goingto}}">
                <input type="hidden" name="time" value="{{$city_time}}">
                <input type="hidden" name="seat" value="{{$city_seat}}">
                <input type="hidden" name="route_id" value="{{$route->id}}">
                

                <button class="btn btn-success">Select</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @else
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class=" card shadow">
        <div class="card-body">
          <div class="row">
            <h2>There are no buses for this route</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
@endforeach

@endsection   