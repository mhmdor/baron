



@extends(' layouts.app')

@section ( 'title', 'Orders')

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
                            <h4 class="card-title ">Add New Order</h4>
                        </div>
                        <div class="card-content ">
                           
                            <form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                           
                              
                             
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title Of Order In Arabic</label>
                                            <input type="text" class="form-control" name="title_ar">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title Of Order In English</label>
                                            <input type="text" class="form-control" name="title_en">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description Of Order In Arabic</label>
                                            <input type="text" class="form-control" name="description_ar">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description Of Order In English</label>
                                            <input type="text" class="form-control" name="description_en">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="bmd-label-floating">Name of Category in Arabic</label>
                                            <input type="text" class="form-control" name="name_ar">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Old Price Of Order</label>
                                            <input type="number" class="form-control" name="old_price">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="bmd-label-floating">Name of Category in Arabic</label>
                                            <input type="text" class="form-control" name="name_ar">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">New Price Of Order</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="bmd-label-floating">Name of Category in Arabic</label>
                                            <input type="text" class="form-control" name="name_ar">
                                        </div> --}}
                                    </div>
                                </div>

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
