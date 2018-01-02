<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\User;
use Auth;

class UserController extends Controller
{
	public function newRegistration(Request $request) 
    {	
    	$status =  0;
    	if (User::where('email', '=', $request->email)->exists()) {
    		$status = 2; // email already exists
    	} else {
    		if(User::create($request->all())) {
    			$status = 1;
    		}
    	}
        
        return response()->json(['status'=>$status]);
    }

}

