@extends(' layouts.app')

@section ( 'title', 'Category')

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
                            <h4 class="card-title ">Edit Category</h4>
                        </div>
                        <div class="card-content ">

                            <form action="{{ route('category.update',$category->id) }}" method="POST" >
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name in En</label>
                                            <input type="text" class="form-control" name="name_en" value="{{$category->name_en}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name in Ar</label>
                                            <input type="text" class="form-control" name="name_ar" value="{{$category->name_ar}}">
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
