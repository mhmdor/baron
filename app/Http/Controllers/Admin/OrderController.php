<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.order.create');
    }

    public function store(Request $request)
    {
        
        $order = new Order();
        $order->title_ar = $request->title_ar;
        $order->description_ar = $request->description_ar;
        $order->title_en = $request->title_en;
        $order->description_en = $request->description_en;
        $order->price = $request->price;
        $order->old_price = $request->old_price;
        $image = $request->file('image');
        $destinationPathImg = public_path('uploads/order/');
        if (!$image->move($destinationPathImg, $image->getClientOriginalName())) {
            return 'Error saving the file.';
        }
        $order->url = $image->getClientOriginalName();
        $order->save();
        return redirect()->route('order.index')->with('successMsg','تمت اضافة العرض بنجاح');
    }

     public function delete($id)
    {
        $image = Order::find($id)->delete();
        return redirect()->route('order.index')->with('successMsg','تم حذف العرض بنجاج');
    }
}
