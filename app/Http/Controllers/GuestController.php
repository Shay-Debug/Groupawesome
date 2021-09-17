<?php

namespace App\Http\Controllers;

use App\Models\programme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    //
    function  walkinview(){
        $programmes=programme::all();
        return view('create_walkin',['programmes'=>$programmes]);
    }

    function  walkin(Request $req){
    $pt=$req->pt;
    $gn=$req->gname;
    $dt=$req->date;

//    dd($a);
    $data=DB::table('programmes')->where('programme_id','=',$req->programme)->get();

      return view('pay',compact('data'),['ptype'=>$pt, 'gname'=>$gn, 'date'=>$dt]);
    }
}
