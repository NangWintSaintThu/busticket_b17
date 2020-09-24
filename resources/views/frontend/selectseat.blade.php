  @extends('master')
  @section('content') 

<div class="row mt-5">
      <h1> Bus Type </h1>

    </div>

      <!-- Disocunt Item -->

      <!-- line no 113 to 136 -->
    <div class="row">
      <div class="col-12">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
          @foreach($bustypes as $bustype)
                 <div class="MultiCarousel-inner">
                    <div class="bustype">
                        <div class="pad15">
                         <a href="{{route('seatpage')}}"> <img src="{{ asset($bustype->logo)}}" class="img-fluid"></a>
                            <p class="text-truncate">{{$bustype->name}}</p>
                            <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                  </ul>
                </div>


                <a href="{{route('seatpage')}}" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id = '{{$bustype->id}}' data-name = '{{$bustype->name}}' data-photo = '{{$bustype->photo}}'>Select Seat</a>


                        </div>
                    </div>
                    
                </div>
                @endforeach
                <button class="btn btnMain leftLst"><</button>
                <button class="btn btnMain rightLst">></button>
            </div>
        </div>
    </div>
 {{-- for part1 --}}
 <?php
 for($i=1;$i<=$tseat;$i++){

  ?>
<?php if ($i%4==1){?>
<tr>
<?php }?>
<?php if (in_array($i, $sumArray))
{?>
<td>
<a href="" class="seat1 seat-unavaliable">
<span><i class="fa fa-lock" aria-hidden="true"></i></span>
</a>
</td>}

    <?php }else{?>
    <tr>
    <td>
      <a href="#" class="seat seat-avaliable" data-seat-number="about.blade.php{{$i}}" data-carseat="{{$seat}}">
        <span>{{$i}}</span>
      </a>
    </td>
    <?php }?>
    <?php if($i%4==2){?>
    <td><span class="aisle"></span></td>
    <?php }?>
    <?php if($i%4==0){?>
  </tr>

  {{-- for part2 --}}
 {{--  for ($i=1; $i <=$tset; $i++){
  ?>
  <?php if ($i%4==1){?>
<tr>
<?php }?>
<?php if (in_array($i,$sumArray))
{?>
<td><a href="#" class="seat1 seat-unavailable">
  <span><i class="fa fa-lock" aria-hidden="true"></i></span>
</a></td>
</tr>
}
 --}}

  <?php }?>

      
   
  </div>

 <div class="card ">
  <div class="row ">
    @foreach($bustypes as $bustype)
    <div class="col-md-4">
     <a href="{{route('seatpage')}}"><img src="{{asset('frontend/img/background.jpg')}}" alt="Img"></a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
           <p class="text-truncate">{{$bustype->name}}</p>
         <a href="{{route('seatpage')}}" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id = '{{$bustype->id}}' data-name = '{{$bustype->name}}' data-photo = '{{$bustype->photo}}'>Select Seat</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
