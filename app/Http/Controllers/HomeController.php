<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Item;
use App\Order;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all([
            'title_'.app()->getLocale().' As title','sub_title_'.app()->getLocale().' As sub_title',
            'image'
        ]);
        $images = Gallery::all();

        $categories = Category::all([
            'id','name_'.app()->getLocale().' As name',
        ]);
        $items = Item::all([
            'category_id', 'name_' . app()->getLocale().' As name',
            'description_' . app()->getLocale().' As description', 'price', 'image'
        ]);
       
        return view('index', compact('sliders', 'categories', 'items','images'));
    }

    public function order()
    {
      $orders= Order::all([
        'title_'.app()->getLocale().' As title',
        'description_' . app()->getLocale().' As description','price','url','old_price',


      ]);
       
        return view('order', compact('orders'));
    }
}
