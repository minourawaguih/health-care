<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
use DB;
use App\Registration ;

class LogoutController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
		return view('index');  
        
    }
}