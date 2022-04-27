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
                                                  Type
                                                </th>
                                                <th>
                                                    Messege 
                                                  </th>

                                            <th>
                                                Status
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
                                                    Type
                                                  </th>
                                                  <th>
                                                    Messege 
                                                  </th>
                                                  <th>
                                      
                                          
                                                    Status
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
                                         <td>{{$category->type}}</td>
                                         <td>{{$category->messege}}</td>
                                          @if ($category->status =='0')
                                          <td>
                                            <form id="delete-form-{{ $category->id }}" action="{{ route('accept.reservation',$category->id) }}" style="display: none;" method="POST">
                                                @csrf
                                                @method('POST')
                                            </form>
                                            <button type="button" class="btn btn-success btn-sm" onclick="if(confirm('Accept This reservation ?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $category->id }}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }"><i >Accept</i></button>
     
                                            <form id="delete-form-{{ $category->id }}1" action="{{ route('cancel.reservation',$category->id) }}" style="display: none;" method="POST">
                                                @csrf
                                                @method('POST')
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Cancel This reservation ?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $category->id }}1').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }"><i >Cancel</i></button>
                                        </td>
                                          @elseif($category->status =='1')
                                     <td>  <form id="delete-form-{{ $category->id }}1" action="{{ route('cancel.reservation',$category->id) }}" style="display: none;" method="POST">
                                        @csrf
                                        @method('POST')
                                    </form>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Cancel This reservation ?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $category->id }}1').submit();
                                            }else {
                                            event.preventDefault();
                                            }"><i >Cancel</i></button></td>    
                                            
                                                
                                            @else
                                      <td>Reservation Was Canceled  </td>      
                                            @endif  
                                       
                                            


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







































































    




  
 
  

      
  