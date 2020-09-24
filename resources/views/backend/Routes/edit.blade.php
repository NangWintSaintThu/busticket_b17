@extends('backendtemplate')
@section('content')
   <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Route Create Form</h1>
        </div>
              <div class="row">
              	<div class="col-md-12">
              		<form action="{{route('routes.update',$route->id)}}" method="post" enctype="multipart/form-data">
              			@csrf
                    @method('PATCH')
                        <div class="form-group row">
                                <label for="inputtime" class="col-sm-2 col-form-label" >Departure_Station</label>
                                 <div class="col-sm-10">
                                  <select name="depature" class="form-control">
                                  @foreach($cities as $city)
                                      <option value="{{$city->id}}" @if($city->id == $route->departure_station) {{"selected"}} @endif>{{$city->name}}</option>
                                  @endforeach
                                </select>
                             </div>
                  
                             </div>
                             <div class="form-group row">
                                <label for="inputtime" class="col-sm-2 col-form-label">Arrival_Station</label>
                                 <div class="col-sm-10">
                                  
                                  <select name="arrival" class="form-control">
                                  @foreach($cities as $city)
                                      <option value="{{$city->id}}" @if($city->id == $route->arrival_station) {{"selected"}} @endif>{{$city->name}}</option>
                                  @endforeach
                                </select>

                                  <span class="text-danger">{{$errors->first('arrivalstation')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputphoto" class="col-sm-2 col-form-label">Departure_Time</label>
                                 <div class="col-sm-10">
<<<<<<< HEAD
                                  <input type="time" class="form-control" id="inputtime" name="departuretime" value="{{$route->departure_time}}">
=======
                                  <input type="time" class="file" id="inputtime" name="departuretime" value="{{$route->departure_time}}">
>>>>>>> c528330fb0a640fa913d7c747f0ae9d324688f9d
                                  <span class="text-danger">{{$errors->first('departuretime')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputprice" class="col-sm-2 col-form-label">Price</label>
                                 <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputprice" name="price" value="{{$route->price}}">
                                  <span class="text-danger">{{$errors->first('price')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputbus" class="col-sm-2 col-form-label">Bus Type</label>
                                 <div class="col-sm-10">
<<<<<<< HEAD
                                  <select name="bustypeid" class="form-control">
                                  @foreach($bustypes as $bustype)
                                      <option value="{{$bustype->id}}" @if($bustype->id == $route->bus_type_id) {{'selected'}} @endif>{{$bustype->name}}</option>
                                           @endforeach
                                </select>
=======
                                  <input type="text" class="file" id="inputbus" name="bustypeid" value="{{$route->bus_type_id}}">
>>>>>>> c528330fb0a640fa913d7c747f0ae9d324688f9d
                                  <span class="text-danger">{{$errors->first('bustypeid')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputseat" class="col-sm-2 col-form-label">Seat</label>
                                 <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputseat" name="busseat" value="{{$route->seat}}">
                                  <span class="text-danger">{{$errors->first('busseat')}}</span>
                             </div>
                             </div>

                             

                               <div class="form-group row">
                               <div class="col-sm-10">
                               <button type="create" class="btn btn-primary" name="btnsubmit" value="Create">Update</button>
                             </div>
                            </div>
                           </form>
                         </div>
                       </div> 
                       @endsection