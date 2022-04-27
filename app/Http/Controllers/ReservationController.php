<?php

namespace App\Http\Controllers;

use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReservationController extends Controller
{




 public function reserve(Request $request)
 {

   
     $this->validate($request ,[
         'name' => 'required',
         'phone' => 'required',
         'num_of_people' => 'required',
         'dateandtime' => 'required|after:yesterday',
        //  'messege' => 'required',

     ],
     [
        'name.required' => 'Enter Your Name',
        'phone.required' => 'Enter Your Phone',
        'num_of_people.required' => 'Enter Num Of People',
        'dateandtime.required' => 'Enter Date For Your Reservation ',
       
    ]
    );

    
   
     $reservation = new Reservation();

     $reservation->name =$request->name;
     $reservation->type=$request->type;
     $reservation->phone =$request->phone;
     $reservation->num_of_people = $request->num_of_people;
     $reservation->messege =$request->messege ;
     $reservation->date_time =$request->dateandtime;
     $reservation->status =0;
     $reservation->save();


    //  Toastr::success('شكرا لك .. تم ارسال طلب الحجز بنجاح سنقوم بتأكيد الطلب قريبا يرجى الانتظار',
    //      'l',["positionClass" => "toast-top-right"]);

     return redirect()->back()->with('success','شكرا لك .. تم ارسال طلب الحجز بنجاح سنقوم بتأكيد الطلب قريبا يرجى الانتظار'); 

 }
 
}
