<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;

class ReservationController extends Controller
{
    public function indexCurrent()
    {
        $reservations = Reservation::where('status','!=',2)->whereDate('date_time','>=',date('Y-m-d 00:00'))->get();
       
        return view('admin.reservation.current',compact('reservations'));
    }

    public function indexDone()
    {
        $type = 'Done Order';
        $reservations  = Reservation::where('status','!=',2)->whereDate('date_time','<',date('Y-m-d 00:00'))->get();
        return view('admin.reservation.done',compact('reservations','type'));
    }

    public function getCancelReservation()
    {
        $type = "Cancel Reservation";
        $reservations = Reservation::where('status',2)->get();
        return view('admin.reservation.done',compact('reservations','type'));
    }

    public function getAcceptReservation()
    {
        $type = "Accept Reservation";
        $reservations = Reservation::where('status',1)->get();
        return view('admin.reservation.done',compact('reservations','type'));
    }

    public function acceptReservation($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 1;
        $reservation->save();
        return redirect()->back()->with('successMsg','تم تأكيد الطلب');
        
    }

    public function cancelReservation($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 2;
        $reservation->save();
        return redirect()->back()->with('successMsg','تم الغاء الطلب');
    }

}
