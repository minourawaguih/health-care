<?php

namespace App\Http\Controllers;
use App\Registration ;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    public function CheckLogin(Request $request){
        $this->validate($request,['email' =>'required|email', 
        'password'=> 'required|min:8']);
    
     
$user = Registration::where('email' , $request->email)-> first();

if($user) {

if( Hash::check($request->password, $user->password) ) {
       
            $user =  Registration::where('email',$request->email) -> first();
            $firstName = $user->fname;

           $email=$user->email;
$id=$user->id;
           //return view('homepage');
           return view("homepage", ["firstName"=>$firstName], ["id"=>$id] );
        
        }
 }
    

echo "<script>";
echo "alert('Incorrect email or password. Signup instead!');";
echo "</script>";


return view('registration.create');        
    
    
    }
}
