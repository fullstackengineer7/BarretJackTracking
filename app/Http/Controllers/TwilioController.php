<?php

namespace App\Http\Controllers;

use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class TwilioController extends Controller
{
    protected $twilio;
    
    public function __construct(){
        $this->sid = getenv('TWILIO_ACCOUNT_SID');
        $this->token = getenv('TWILIO_AUTH_TOKEN');
        $this->twilio = new Client($this->sid, $this->token);

    }

    public static function getUSPhonePrice(){
        $country = $this->twilio->pricing->v1->phoneNumbers
                               ->countries("US")
                               ->fetch();
        var_dump($country->country->phone_number_prices->current_price);die();
        return $country;
    }


}
