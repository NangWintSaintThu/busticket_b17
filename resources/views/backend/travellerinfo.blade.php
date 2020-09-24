<!doctype html>
<html lang="en">
  <head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  </head>
  <body>
    

    <!-- Page Heading -->
    
        
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">

            <div class="img bg-wrap text-center py-4" style="background-image: url(backend/images/bus.jpg);">
          <div class="user-logo">
            <div class="img" style="background-image: url(backend/images/bus.jpg);"></div>
          </div>
        </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="{{route('travellerinfos.index')}}"><span class="fa fa-book mr-3 notif"><small class="d-flex align-items-center justify-content-center"></small></span>Traveller Info</a>
          </li>
          <li>
            <a href="{{route('bookingdetailpage')}}"><span class="fa fa-pencil mr-3"></span>Booking Detail</a>
          </li>
           <li>
            <a href="{{route('routepage')}}"><span class="fa fa-book mr-3"></span> Route </a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

        </nav>
         <div class="container-fluid">
<div class="row">
        <div class="col-md-12 mb-3">
            <h1 class="h3 mb-0 text-gray-800 d-inline-block">Traveller Information</h1>
            
        </div>
    </div>
	
    
    <div class="row m-2">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>id</th>
    					<th>user_id</th>
    					<th>phone_no</th>
    					<th>address</th>
    					
    				</tr>
    			</thead>
    		{{-- 	<tbody>
    				@php $i=1; @endphp
    				@foreach($order as $order)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$order->voucherno}}</td>
    					<td>{{$order->user->name}}</td>
    					<td>{{$order->total}} MMK</td>
    					<td>
    						<a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
    						<a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-success">Confirm</a>

    						<a href="#" class="btn btn-danger">Delete</a>
    					</td>
    				</tr>
    				@endforeach
    			</tbody> --}}
    		</table>
    	</div>
    </div>

 	</div>
