@extends('layouts.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')

<h1 style="font-size: 50px;  text-align: center;
 color: #1c294e;margin-top: 50px;  font-weight: bold;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" > Baron Dashboard</h1>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('item.index')}}">

                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">local_dining</i>
                            </div>
                            <p class="card-category">Item</p>
                            <h3 class="card-title">{{$itemCount}}
                                <small>item</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                           
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('category.index')}}">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">room_service</i>
                            </div>
                            <p class="card-category">Category</p>
                            <h3 class="card-title">{{$CategoryCount}} Category
                            </h3>
                        </div>
                        <div class="card-footer">
                            {{-- <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div> --}}
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('slider.index')}}">

                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">slideshow</i>
                            </div>
                            <p class="card-category">Slider </p>
                            <h3 class="card-title">{{$SliderCount}} Slider</h3>
                        </div>
                        <div class="card-footer">
                            {{-- <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Github
                            </div> --}}
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('gallery.index')}}">

                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">crop_original</i>
                            </div>
                            <p class="card-category">Gallery</p>
                            <h3 class="card-title">{{$GalleryCount}} Image</h3>
                        </div>
                        <div class="card-footer">
                            {{-- <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div> --}}
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('order.index')}}">

                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment
                                </i>
                            </div>
                            <p class="card-category">Offers</p>
                            <h3 class="card-title">{{$orderCount}} offer</h3>
                        </div>
                        <div class="card-footer">
                           
                        </div>
                    </div>
                    </a>
                </div>
            </div>
          
            </div>
        </div>
    </div>
@endsection


