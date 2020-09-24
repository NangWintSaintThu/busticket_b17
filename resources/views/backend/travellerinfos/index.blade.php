@extends('backendtemplate')

@section('content')
	<div class="container-fluid">

    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Traveller List</h1>
    		{{-- <div class="text-right">
                  <a href="{{route('bus_types.create')}}" class="btn btn-secondary" >Add New</a>
                </div> --}}
  		</div>
  	</div>
    <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="dataTable_length">
                        <label>
                            Show
                            <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                
                            </select>
                            entires
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="dataTable_filter" class="dataTable-filter">
                        <label>
                            Search
                            <input type="search" class="form-control form-control-sm" placehoder aria-controls="dataTable" >
                        </label>
                    </div>
                </div>
            </div>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="Width:100%;">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-lable="Name: activate to sort column descending" style="width: 58px;">No</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-lable="Name: activate to sort column descending" style="width: 58px;">Name</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-lable="Name: activate to sort column descending" style="width: 58px;">Email</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-lable="Name: activate to sort column descending" style="width: 58px;">Phone</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-lable="Name: activate to sort column descending" style="width: 58px;">Address</th>
                      {{-- <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-lable="Name: activate to sort column descending" style="width: 58px;">Action</th> --}}
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th rowspan="1" colspan="1">Name</th>
                      <th rowspan="1" colspan="1">Email</th>
                      <th rowspan="1" colspan="1">Phone</th>
                      <th rowspan="1" colspan="1">Address</th>
                      {{-- <th rowspan="1" colspan="1">Action</th> --}}

                      
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach($travellers as $traveller)
                    <tr>
                      <td>{{$i}}</td>
                      <td>{{$traveller->user->name}}</td>
                      <td>{{$traveller->user->email}}</td>
                      <td>{{$traveller->phone_no}}</td>
                      <td>{{$traveller->address}}</td>

                      {{-- <td>
                        <a href="" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                      </td> --}}

                    </tr>
                    @php $i++; @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

       
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                        <a href="" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Preivous</a>
                        
                    </li>
                    <li class="paginate_button page-item active">
                        <a href="" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        
                    </li>
                     <li class="paginate_button page-item ">
                        <a href="" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">2</a>
                        
                   
                </ul>
                </ul>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
       </div>
    
    @endsection
