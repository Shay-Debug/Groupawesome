<?php

namespace App\Http\Controllers;
use App\Models\programme;
use App\Models\cost;
use App\Models\guest;
use App\Models\excurison;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\hotel;
use App\Models\tour_comp;

class tourguests extends Controller
{
  function tourview(Request $request){
    $tour_comp=tour_comp::all();
    $hotel=hotel::all();
    $programmes=programme::all();
    return view('tourguest',['hotel'=>$hotel,'tour'=>$tour_comp,'programme'=>$programmes,'booking'=>$request->booking]);
  }
}
