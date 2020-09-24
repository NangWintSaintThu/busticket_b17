@extends('master')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
	<div class="container">  
	</div>
</div>

<center>
	<h2 style="background-color:gray">Choose Your Seat Number</h2>
	<div class="container-fluid py-5">
		<div class="row">
			<div class="col-md-6">
				
			<table cellspacing="10" cellpadding="15" border="1">
				<tr style="background-color: gray">
					<td colspan="5">
						<input type="button" value="Driver" disabled>
					</td>
				</tr>
				

				<?php
				for ($i=1; $i<=$route->seat ; $i++) { 
				?>
				<?php if($i%4 == 1){ ?>
					<tr>
				<?php } ?>
				
				<td>

					

					<a href="javascript:void(0)"  class="btn btn-outline-success btn-sm btn_check btn_avaliable ">
						{{$i}}
					</a>

					
				</td>
				<?php if($i%4 == 2){ ?>
				<td>
					
				</td>
				<?php }	?>
				<?php if($i%4==0){ ?>

				</tr>
				<?php } ?>

				<?php } ?>

			</table>
			</div>



			<div class="col-md-4">
				<div class="card shadow">
					<form action="{{route('bookingdetails.store')}}" method="post">
						@csrf
						<input type="hidden" name="route_id" value="{{$route->id}}">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12" >
								<div class="form-group">
									<label class="small mb-1" for="inputname">Leaving From</label>
									
									<span class="form-label">Leaving From</span>
									<select name="leavingfrom" id="city" class="form-control">
										<optgroup label="Choose City">
											@foreach($cities as $city)
											<option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$leavingfrom) {{'selected'}} @endif>{{$city->name}}</option>
											@endforeach 
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label class="small mb-1" for="inputname">Going To</label>
									 <select class="form-control" name="leavingfrom">
                               @foreach($cities as $city)
                               <option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$goingto) {{'selected'}} @endif>{{$city->name}}</option>
                               @endforeach 
                             </select>

								</div>
    
								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Departure Date</label>
									<input class="form-control py-4" id="date"   value="{{$city_date}}" type="date" name="departure_date">
								</div>
								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Number of Seat</label>
									{{-- <input class="form-control py-4" id="seat"  value='{{$city_seat}}'> <select name="city_seat" id="" class="form-control"> --}}
										<div class="form-field">
                        <div class="select-wrap">
                          <select name="city_seat" id="" class="form-control">
                           <option class="selected">{{$city_seat}}</option>
 
                         </select>
								</div>
							</div>
						</div>
					</div>
				</div>
			
								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Seat Number</label>
									<input class="form-control py-4" id="inputDeparture DateAddress" type="text" name="seatno" placeholder="0,0">
								</div>

								@php
									$total = $route->price * $city_seat;
								@endphp

								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Total</label>
									<input class="form-control py-4" id="inputDeparture DateAddress" type="text"  name="total" readonly="" value="{{$total}}">
								</div>
								

								<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Book Now</button>
								
								
							</div>
							</form>
						</div>
					</div>
				</div>

</center>

@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$('.btn_check0').click(function(){
			$('.btn_avaliable').addClass('btn-danger');
			$('.btn_avaliable').remove('btn-outline-success');

		})
	})
</script>
@endsection