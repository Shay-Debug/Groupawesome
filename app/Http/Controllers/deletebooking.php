<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\excurison;
use App\Models\booking;
use Session;

class deletebooking extends Controller
{
    function booking_delete(Request $request){
      excurison::where('booking_id',$request->deletebook)->delete();
      booking::where('booking_id',$request->deletebook)->delete();
      Session::flush();
      return redirect('/');
    }
}
