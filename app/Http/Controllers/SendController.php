<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
        public function send(Request $request){

    	include(app_path() . '\SMS.php');

    	$smsArray = $request->input('phone');

    	$smsArray = explode(',',$smsArray);

    	$content = $request->input('text');

    	$url = $request->input('url');

    	settype($url, "string");

    	SendSMS($subject,$content,$sendtime,$smsArray);

    	return redirect($url);
    }
}
