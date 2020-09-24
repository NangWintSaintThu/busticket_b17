@extends('backendtemplate')
@section('content') 

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h1 class="h3 mb-0 text-gray-800 d-inline-block">Booking Detail Information</h1>
            
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
    

