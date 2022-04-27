



@extends(' layouts.app')

@section ( 'title', 'Slider')

@push('css')


@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Image</h4>
                        </div>
                        <div class="card-content ">
                           
                            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                           
                                <div class="row">
                                    <div class="col-md-12">
                                            <label class="control-label">Image</label>
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                </div>
                             

                                <button type="submit" class="btn btn-primary"> Save</button>
                                <a href="{{route('category.index')}}" class="btn btn-danger">Back </a>

                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('scripts')



@endpush
