@extends(' layouts.app')

@section ( 'title', 'Item')

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
                            <h4 class="card-title ">Edit Item</h4>
                        </div>
                        <div class="card-content ">

                            <form action="{{ route('item.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name in En</label>
                                            <input type="text" class="form-control" name="name_en" value="{{$item->name_en}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name in Ar</label>
                                            <input type="text" class="form-control" name="name_ar" value="{{$item->name_ar}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Category</label>
                                            <select class="form-control" name="category">
                                                @foreach($categories as $key=>$category)
                                                    <option {{ $category->id == $item->category->id ? 'selected': ''}} value="{{$category->id}}">{{$category->name_en}}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description in En</label>
                                            <textarea name="description_en" class="form-control" > {{$item->description_en}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description in Ar</label>
                                            <textarea name="description_ar" class="form-control" > {{$item->description_ar}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Price</label>
                                            <input type="number" class="form-control" name="price" value="{{$item->price}}">
                                        </div>
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
                        <a href="{{route('item.index')}}" class="btn btn-danger">Back </a>

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
