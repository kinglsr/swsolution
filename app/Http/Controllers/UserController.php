<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\NewMessage;
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


    public function newMessage(Request $request) 
    { 
        $sender = [];
        $sender['name'] = $request->name;
        $sender['email'] = $request->email;
        $sender['contact'] = $request->contact;
        $sender['message'] = $request->message;
        $mailTo = 'Saiphp123@Gmail.Com';
        if(Mail::to($mailTo)->send(new NewMessage($sender))) {
            Log::write("message_test",print_r("success",true));
        }
    }

}

