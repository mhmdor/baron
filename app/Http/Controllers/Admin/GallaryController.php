<?php

namespace App\Http\Controllers\Admin;

use App\Gallary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
        $images = Gallary::all();
        return view('admin.gallary', compact('images'));
    }

    public function create()
    {
        return view('admin.gallary.create');
    }

    public function store(Request $request)
    {
        $gallary = new Gallary();
        $image = $request->file('image');
        $destinationPathImg = public_path('uploads/gallary/');
        if (!$image->move($destinationPathImg, $image->getClientOriginalName())) {
            return 'Error saving the file.';
        }
        $gallary->url = $image->getClientOriginalName();
        $gallary->save();
    }

    public function delete($id)
    {
        $image = Gallary::find($id)->delete();
    }
}
