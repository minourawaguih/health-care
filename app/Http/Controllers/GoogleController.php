<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use Socialite;

use Auth;

use Exception;


use App\Registration ;

class GoogleController extends Controller

{

    

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

    public function redirectToProvider()

    {

        return Socialite::driver('google')->redirect();

    }

    public function handleProviderCallback()

    {

        try {
            
        
            $googleUser = Socialite::driver('google')->user();
            $existUser = Registration::where('email',$googleUser->email)->first();
            


            if($existUser) {
                Auth::loginUsingId($existUser->id);
				echo $googleUser->email;
				 return view("homepage", ["firstName"=>$googleUser->name], ["id"=>$existUser->id] );
            }
            else {
                $user = new Registration;
                $user->fname = $googleUser->name;
				$user->lname = $googleUser->name;
			    $user->birth="2002-03-06";
				$user->age="20";
				$user->sex="female";
                $user->bloodGroup="A+";
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
				return view("homepage", ["firstName"=>$googleUser->name], ["id"=>$user->id] );
            }
			
          
    
        } 
        catch (Exception $e) {
			
            dd($e->getMessage());
        }
    }

}

