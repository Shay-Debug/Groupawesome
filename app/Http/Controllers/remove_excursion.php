<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\excurison;
use App\Models\booking;

class remove_excursion extends Controller
{
    function excursion_remove(Request $request){
      excurison::where('booking_id',$request->booking_id)->where('programme_id',$request->remove_ex)->delete();
      $updatebookingcost=booking::where('booking_id',$request->booking)->decrement('total_cost',$request->cost);
      return redirect('/pay');
    }
}
