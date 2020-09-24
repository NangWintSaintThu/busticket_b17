@extends('master')
@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('frontend/img/bg-1.jpg')}}');" data-stellar-background-ratio="0.5">

  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center">

      <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
        <div class="text">
          <h1 class="mb-4">Wellcome <span>To Bus Reservation</span> </h1>

        </div>
      </div>
      <div class="col-lg-2 col"></div>

      <div class="col-lg-4 col-md-6 d-flex" style="margin-top: 100px;">
        <form action="{{route('searchpage')}}" class="request-form ftco-animate" method="post">
          @csrf
          @if(session('message'))
          <div class="alert alert-success alert_message">{{session('message')}}</div>
          @endif
          <h2>Make your Booking</h2>
             
          <span class="text-danger">{{$errors->first('please select departure place ')}}</span>
         
 
          <div class="form-group">

            <span class="form-label">Leaving From</span>
            <select name="leavingfrom" id="city" class="form-control">
              <optgroup label="Choose City">

                @foreach($cities as $city)
                  <option placeholder=" Choose City" value="{{$city->id}}">{{$city->name}}</option>
                @endforeach 
              </optgroup>

            </select>
            <span class="text-danger">{{$errors->first('please select departure place ')}}</span> 
          </div>

            
             
          <div class="form-group">
            <span class="form-label">Going To</span>
            <select name="goingto" id="city" class="form-control">
              <optgroup label="Choose City">
            @foreach($cities as $city)
              <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach 
          </optgroup>

        </select>
        <span class="text-danger">{{ $errors->first('city') }}</span>

        </div>


        <div class="d-flex">
                
            <div class="form-group mr-2">
              <label for="" class="label">Departure date</label>
              <input type="date" class="form-control" name="city_date">
            </div>
            <div class="form-group ml-2">
              <label for="" class="label">Number of seat</label> 
              <select class="form-control" name="city_seat">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>


          </div>
        </div>

         <div class="form-group">
          <label for="" class="label">Pick-up time</label>
          <input type="time" class="form-control" id="" placeholder="Time" name="city_time">
        </div>

         <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Search Now</button>
                
                
        </div>

    </form>


  </div>
</div>
</div>
</div>
       
  </section>   
    
  <section class="ftco-section services-section img bg-primary" style="background-image: url(images/bg_2.jpg);">
   
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            
            <h2 class="mb-2">Buy bus tickets in 3 easy steps</h2>
          </div>
        </div>
        <div class="row d-flex">
          
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-route"></span></div>
                  <h3 class="heading mb-0 pl-3">Search</h3>
                </div>
                <p>Choose your origin,destination,journey dates and search for buses</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-rent"></span></div>
                  <h3 class="heading mb-0 pl-3">Select</h3>
                </div>
                <p>Select your desired trip and choose your seats</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-"></span></div>
                  <h3 class="heading mb-0 pl-3">Payment</h3>
                </div>
                <p>Pay for the tickets Credit Cards or cash</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
  </section>
   
<section>

     

<div id="speakers" class="mt-5">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7">
          <h2 class="secondary text-uppercase">Popular Route</h2>
         
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/tclimg/img1.jpg')}}" width="200px" height="150px">
            <p>Tachileik</p>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/tclimg/img12.jpg')}}"  width="200px" height="150px">
            <p>Kyaing Tong</p>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/tclimg/img11.jpg')}}"  width="200px" height="150px">
            <p>Mong Phat</p>
          </div>
        </div>
      </div>
       </div>
     </div>
   


    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7">
          <h2 class="secondary text-uppercase">Gallery</h2>
      </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/buscarimg/bus4.jpg')}}"  width="200px" height="150px">
            <p>Shwe Yae Kan</p>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/buscarimg/bus2.jpg')}}" width="200px" height="150px">
            <p>Shwe Myote Daw</p>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/buscarimg/bus3.jpg')}}" width="200px" height="150px">
            <p>Sam Lao</p>
          </div>
        </div>
      </div>
    </div>
</section> 

@endsection   
        
