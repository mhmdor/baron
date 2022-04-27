@extends(' layouts.app')

@section ( 'title', 'Reservation')

@push('css')

     
      <!-- Custom styles for this template -->
      <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  
      <!-- Custom styles for this page -->
      <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    @endpush

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @include('layouts.partial.msg')

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Reservation</h4>

                        
                    </div>
                        <div class="card-content text-center table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name Person 
                                              </th>
  
                                              <th>
                                                  Mobile 
                                                </th>
                                                <th>
                                                  Date 
                                                </th>
                                                <th>
                                                  Num Of People 
                                                </th>
                                                <th>
                                                    Messege 
                                                  </th>
                                            
                                        </tr>
                                      </thead>
                                      <tfoot>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name Person 
                                              </th>
  
                                              <th>
                                                  Mobile 
                                                </th>
                                                <th>
                                                  Date 
                                                </th>
                                                <th>
                                                  Num Of People 
                                                </th>
                                                <th>
                                                    Messege 
                                                  </th>
                                           
                                        </tr>
                                      </tfoot>
                                 

                                    @foreach( $reservations as $key=>$category )
                                        <tr>
                                            <td>{{$category->id}} </td>
                                         <td>{{$category->name}}</td>
                                         <td>{{$category->phone}}</td>
                                         <td>{{$category->date_time}}</td>
                                         <td>{{$category->num_of_people}}</td>
                                         <td>{{$category->messege}}</td>
                                               
                                          


                                        </tr>
                                    @endforeach
                                </table>
                        </div>

                </div>
            </div>

        </div>
    </div>

    @endsection

@push('scripts')
 
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  

  
      <!-- Custom scripts for all pages-->
      <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
  
      <!-- Page level plugins -->
      <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  
      <!-- Page level custom scripts -->
      <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

      
  
    @endpush







































































    




  
 
  

      
  