<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
  
class TwilioSMSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function sendSMS($mobile_number,$message){  
        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($mobile_number, [
                'from' => $twilio_number, 
                'body' => $message]);
            return 'success';
            // dd();
  
        } catch (Exception $e) {
            return "Error: ". $e->getMessage();
            // dd("Error: ". $e->getMessage());
        }
    }


   
}