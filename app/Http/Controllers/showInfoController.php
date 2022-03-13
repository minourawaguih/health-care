<?php

namespace App\Http\Controllers;
use App\Registration ;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;



class showInfoController extends Controller
{
   
	
	public function showInfo(Request $request){
       
     $id=$request->id;
$user = DB::table('registrations')->where('id', $id)->first();
return view('showInfo',['user'=>$user]);
    
	      
    
    
    }
}
