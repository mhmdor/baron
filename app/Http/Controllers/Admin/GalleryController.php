<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::all();
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $gallery = new Gallery();
        $image = $request->file('image');
        $destinationPathImg = public_path('uploads/gallery/');
        if (!$image->move($destinationPathImg, $image->getClientOriginalName())) {
            return 'Error saving the file.';
        }
        $gallery->url = $image->getClientOriginalName();
        $gallery->save();
        return redirect()->route('gallery.index')->with('successMsg','تمت اضافة الصورة بنجاح');
    }

    public function delete($id)
    {
        $image = Gallery::find($id)->delete();
        return redirect()->route('gallery.index')->with('successMsg','تم حذف الصورة بنجاج');
    }
}
