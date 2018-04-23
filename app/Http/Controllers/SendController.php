<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\SMS\SMS;
class SendController extends Controller
{
    public function send(Request $request){

        $sms = new SMS();
        $userID=""; //發送帳號
        $password="";   //發送密碼
        $subject = "";
        $content = $request->input('text');
        $mobile = $request->input('phone');
        $sendTime= "";

        if($sms->sendSMS($userID,$password,$subject,$content,$mobile,$sendTime)){

            $url = $request->input('url');
            settype($url, "string");

            return redirect($url);

        } else {
            echo "傳送簡訊失敗，" . $sms->processMsg . "<br />";
        }

    }
}
