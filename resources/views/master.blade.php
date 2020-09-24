<!DOCTYPE html>
<html lang="en">

<head>
  <title>Autoroad - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{--  <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

  <meta name="csrf-token" content="{{ csrf_token() }}">


  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/jquery.timepicker.css')}}">


  <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-info ftco_navbar bg-warning ftco-navbar-light" id="ftco-navbar">
      <div class="container ">
        <a class="navbar-brand" href="{{asset('frontend/img/icon.jpg')}}">Bus<span>Reservation</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>

          {{-- 
            <li class="nav-item"><a href="{{route('yourticketpage')}}" class="nav-link">Your Ticket</a></li> --}}
           {{--  <li class="nav-item"><a href="{{route('bookpage')}}" class="nav-link">Booking Detail</a></li> --}}

            <li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
            
            <li class="nav-item">
              {{-- <span class="float-right d-xl-block d-lg-block d-md-block d-none"> --}}
           {{--  <a href="{{route('registerpage')}}" class=" loginLink  nav-link">| Register |</a> --}}
              {{-- </span> --}}
            </li>
           @guest
           <li class="nav-item">
            {{-- <span class="float-right d-xl-block d-lg-block d-md-block d-none"> --}}
            <a href="{{route('loginpage')}}" class=" loginLink  nav-link"> | Login | </a>
            {{-- </span> --}}
            </li>
          @else
          <li class="nav-item">
          <a id="navbarDropdown" class="loginLink  nav-link text-decoration-none dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" >
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu" >

              <a class="dropdown-item"  href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>

              
          </div>
          </li>

        @endguest 

       

     </div>
   </ul>
 </div>
</div>
</nav>


<!-- END nav -->

@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section mt-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Bus Reservation</h2>
          <p>Bus Ticket Reservationသည်အဝေးပြေးကားလက်မှတ်များကို 
          Online မှရေင်းချပေးသောဝန်ဆောင်မှုတစ်ခုဖြစ်ပါသည်</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Information</h2>
          <ul class="list-unstyled">
            <li><a href="{{route('aboutpage')}}" class="py-2 d-block">About</a></li>
           
          </ul>
        </div>
      </div>
    <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Customer Support</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Payment Option</a></li>
          <li><a href="{{route('bookpage')}}" class="py-2 d-block">Booking List</a></li>
          <li><a href="{{route('contactpage')}}" class="py-2 d-block">Contact Us</a></li>
        </ul>
    </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon icon-map-marker"></span><span class="text">No.169/7B,MTP Condo, Insein Road , Hlaing Township, Yangon. Myanmar.</span></li>
            <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +95 9 250352575</span></a></li>
            <li><a href="#"></span><span class="text">info@myanmaritc.com</span></a></li>
          </ul>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/aos.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/jquery.timepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/scrollax.min.js')}}"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('frontend/js/google-map.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
    
</body>
</html>