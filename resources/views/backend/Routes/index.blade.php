@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Route List</h1>

            <a href="{{route('routes.create')}}" class="btn btn-primary float-right">Add New</a>

          </div>
              <div class="row">
                <div class="col-md-12"> 
                  <table class="table table-bordered">
                   <thead class="thead bg-primary text-light">
                     <tr>
                       <th>No</th>
                       <th>Departure Station</th>
                       <th>Arrival Station</th>
                       <th>Departure Time</th>
                       <th>Price</th>
                       <th>Bus Type</th>
                       <th>Seat</th>
                       <th>Actions</th>
                     </tr>
                     
                     <tbody>
                      @php $i=1; @endphp
                      @foreach($routes as $route)
                       <tr>
                         <td>{{$i++}}</td>
                         <td>{{$route->depature->name}}</td>
                         <td>{{$route->arrival->name}}</td>
                         <td>{{$route->departure_time}}</td>
                         <td>{{$route->price}}</td>
                         <td>{{$route->bus_type->name}}</td>
                         <td>{{$route->seat}}</td>
                         <td>
                            <a href="{{route('routes.edit',$route->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                            <form action="{{route('routes.destroy',$route->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger "><i class="fas fa-trash"></i></button>
                            </form>
                        </td>            

                    </tr>
                    @php $i++; @endphp
                    @endforeach
                     </tbody>
                   </thead>
                 </table>
               </div>
             </div>
           </div>
           

  

@endsection