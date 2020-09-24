@extends('backendtemplate')
@section('content')



         
  <div class="container-fluid">


          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bus Company</h1>
            <a href="{{route('buscompanies.create')}}" class="btn btn-primary float-right">Add New</a>
          </div>
              <div class="row">
                <div class="col-md-12"> 
                  <table class="table table-bordered">
                   <thead class="thead bg-primary text-light">
                     <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th>Phone No</th>
                       <th>Logo</th>
                       <th>Owner Name</th>
                       <th>Address</th>
                       <th>Actions</th>
                     </tr>
                     
                     <tbody>
                      @php $i=1; @endphp
                      @foreach($buscompanies as $buscompany)
                       <tr>
                         <td>{{$i++}}</td>
                         <td>{{$buscompany->name}}</td>
                         <td>{{$buscompany->phone_no}}</td>
                         <td><img src="{{asset($buscompany->logo)}}" width="50" height="50"></td>
                         <td>{{$buscompany->owner_name}}</td>
                         <td>{{$buscompany->address}}</td>
                        <td>
                            <a href="{{route('buscompanies.edit',$buscompany->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                            <form action="{{route('buscompanies.destroy',$buscompany->id)}}" method="POST" class="d-inline-block">
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