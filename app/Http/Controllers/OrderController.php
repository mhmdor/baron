<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Item;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
      $images = Gallery::all();
      return view('gallery',compact('images'));
    }

    public function indexmenu()
    { 
      $categories = Category::all([
        'id','name_'.app()->getLocale().' As name',
    ]);
    $items = Item::all([
        'category_id', 'name_' . app()->getLocale().' As name',
        'description_' . app()->getLocale().' As description', 'price', 'image'
    ]);
      return view('menu',compact('items','categories'));
    }
}
