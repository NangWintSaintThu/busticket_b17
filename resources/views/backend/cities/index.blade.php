@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

           

            <h1 class="h3 mb-0 text-gray-800">City</h1>

            <a href="{{route('cities.create')}}" class="btn btn-primary float-right">Add New</a>
          </div>
              <div class="row">
                <div class="col-md-12"> 
                  <table class="table table-bordered">
                   <thead class="thead bg-primary text-light">
                     <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th>Actions</th>
                     </tr>
                     
                     <tbody>
                      @php $i=1; @endphp
                      @foreach($cities as $city)
                       <tr>
                         <td>{{$i++}}</td>
                         <td>{{$city->name}}</td>
                         <td>
                            <a href="{{route('cities.edit',$city->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                            <form action="{{route('cities.destroy',$city->id)}}" method="POST" class="d-inline-block">
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

@endsection