@extends(' layouts.app')

@section ( 'title', 'Slider')

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
                    <a class="btn btn-primary" href="{{ route('slider.create') }}">Add New Slider</a>
                    @include('layouts.partial.msg')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Slider</h4>
                        </div>
                            <div class="card-content table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Title in En
                                            </th>
                                            <th>
                                                Title in Ar
                                            </th>
                                            <th>
                                                Sub Title in En
                                            </th>
                                            <th>
                                                Sub Title in Ar
                                            </th>
                                            <th>
                                                Image
                                            </th>
                                            <th>
                                                Updated At
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                      </thead>
                                      <tfoot>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Title in En
                                            </th>
                                            <th>
                                                Title in Ar
                                            </th>
                                            <th>
                                                Sub Title in En
                                            </th>
                                            <th>
                                                Sub Title in Ar
                                            </th>
                                            <th>
                                                Image
                                            </th>
                                            <th>
                                                Updated At
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                      </tfoot>
                                   
                                   
                                   
                                   
                                   
                               

                                    @foreach( $sliders as $key=>$slider )
                                        <tr>
                                            <td> {{$key +1 }}</td>
                                            <td> {{ $slider->title_en  }}</td>
                                            <td> {{ $slider->title_ar  }}</td>
                                            <td> {{  $slider->sub_title_en }}</td>
                                            <td> {{  $slider->sub_title_ar }}</td>
                                            <td> <img class="img-thumbnail img-responsive"
                                                src="{{asset('uploads/slider/'.$slider->image)}}" style="height: 50px; width:70px" alt=""></td>
                                            <td> {{ $slider->updated_at }}</td>

                                            <td>
                                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $slider->id }}').submit();
                                                        }else {
                                                        event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>


                                        </tr>
                                        @endforeach
                                </table>
                            </div>

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
