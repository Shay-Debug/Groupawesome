<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programme;


class ProgrammesController extends Controller
{
    //This method displays programme info table format
    // See programmes blade
    function programinfo(){
        $data=programme::all();
   
         return view('programmes',['datastorage'=>$data]);
        }



        // This method stores new programe details inside the programme DB
        // See addprogramme blade
            function addprogramme(Request $req){
            $data=programme::all();
            $addprograminfo=new programme;
             $addprograminfo->programme_id=$req->id;
             $addprograminfo->programme_name=$req->pname;
             $addprograminfo->save();
             return view('programmes',['datastorage'=>$data]);
            
        }

        // Method to display programe data
        // See updateprogrammeinfo blade
        function programmeshowdata(Request $id){
            $data=programme::where('programme_id',$id->id)->get();
            return view('updateprograminfo',['datastorage'=>$data]);
        }

        //Method will save changes made to programme table
        // See updateprogrammeinfo blade

        function updateprogramdata(Request $req){
            // return $req->input();
            $data=programme::where('programme_id',$req->id)->update(['programme_name'=>$req->pname]);
            return redirect('programmes');
            
        }

        //Method will delete programme form programe table
        // See programme blade
        function programdelete($id){
            $data=programme::where('programme_id',$id);
            $data->delete();
            return redirect("programmes");
        
        }   
        

            }



