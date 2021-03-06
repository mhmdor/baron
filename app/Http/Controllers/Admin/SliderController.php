<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'sub_title_ar' => 'required',
            'sub_title_en' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',

        ]);

        $image= $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentdate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentdate.'-'.uniqid().'-'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/slider'))
            {
                mkdir('uploads/slider',0777 , true);
            }

            $image->move('uploads/slider',$imagename);
        } else
            {
                $imagename= 'default.png';

             }

        $slider = new Slider();
        $slider->title_ar = $request->title_ar;
        $slider->title_en = $request->title_en;
        $slider->sub_title_ar = $request->sub_title_ar;
        $slider->sub_title_en = $request->sub_title_en;
        $slider->image = $imagename;
        $slider->save();
        return redirect()->route('slider.index')->with('successMsg','تمت اضافة السلايد بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'sub_title_ar' => 'required',
            'sub_title_en' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);

        $image= $request->file('image');
        $slug = str_slug($request->title);
        $slider = Slider::find($id);
        if (isset($image))
        {
            $currentdate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentdate.'-'.uniqid().'-'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/slider'))
            {
                mkdir('uploads/slider',0777 , true);
            }

            $image->move('uploads/slider',$imagename);
        } else
        {
            $imagename= $slider->image;

        }

        $slider->title_ar = $request->title_ar;
        $slider->title_en = $request->title_en;
        $slider->sub_title_ar = $request->sub_title_ar;
        $slider->sub_title_en = $request->sub_title_en;
        $slider->image = $imagename;
        $slider->save();
        return redirect()->route('slider.index')->with('successMsg','تم تعديل السلايد بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if(file_exists('uploads/slider/'.$slider->image)){
            unlink('uploads/slider/'.$slider->image);
        }
        $slider->delete();
        return redirect()->back()->with('successMsg','تم حذف السلايد بنجاح');
    }
}
