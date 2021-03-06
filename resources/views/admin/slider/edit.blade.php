@extends(' layouts.app')

@section ( 'title', 'Slider')

@push('css')


@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <button type="button" class="close" onclick="this.parentElement.style.display='none'; ">
                                    <i class="material-icons">close</i>
                                </button>
                                <span> {{ $error }}</span>
                            </div>
                        @endforeach

                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Slider</h4>
                        </div>
                        <div class="card-content ">

                            <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title</label>
                                            <input type="text" class="form-control" name="title_en" value="{{$slider->title_en}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title</label>
                                            <input type="text" class="form-control" name="title_ar" value="{{$slider->title_ar}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Sub Title</label>
                                            <input type="text" class="form-control" name="sub_title_en" value="{{$slider->sub_title_en}}">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Sub Title</label>
                                                <input type="text" class="form-control" name="sub_title_ar" value="{{$slider->sub_title_ar}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image </label>
                                        <input type="file" name="image" >
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary"> Save</button>
                                <a href="{{route('slider.index')}}" class="btn btn-danger">Back </a>

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
