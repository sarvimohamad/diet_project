<?php


namespace App\Classes;


use Illuminate\Support\Facades\Log;
use Melipayamak\MelipayamakApi;

class SmsClass
{
    public function send($to,$text)
    {
        Log::info($to);
        Log::info($text);
        return false;
        try{
            $api = new MelipayamakApi('username','password');
            $sms = $api->sms();
            $from = '5000...';
            $response = $sms->send($to,$from,$text);
            $json = json_decode($response);
            return $json->Value; //RecId or Error Number
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}
