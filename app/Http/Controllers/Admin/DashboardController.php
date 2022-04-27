<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use App\Slider;

class DashboardController extends Controller
{
    public function index(){

        $item = Item::get();
        $itemCount = $item->count();

        $Category = Category::get();
        $CategoryCount = $Category->count();

        $Slider = Slider::get();
        $SliderCount = $Slider->count();

        $Gallery = Gallery::get();
        $GalleryCount = $Gallery->count();

        $order = Order::get();
        $orderCount = $order->count();

        return view('admin.dashboard',compact('itemCount','CategoryCount','SliderCount','GalleryCount','orderCount'));
    }
}
