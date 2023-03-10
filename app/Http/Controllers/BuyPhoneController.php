<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class BuyPhoneController extends Controller
{
    protected $twilio;

    public function __construct(){
        $this->sid = getenv('TWILIO_ACCOUNT_SID');
        $this->token = getenv('TWILIO_AUTH_TOKEN');

        $this->twilio = new Client($this->sid, $this->token);
    }

    public function getCountries(){
        // $phoneCountries = $this->twilio->pricing->phoneNumbers->countries->read();
       //  $this->validate($request, [
       //   'iso2' => 'required'
       // ]);

       // try {
       //   $country = $request->iso2;
       //   /** Retrieve the cost of phone numbers in the given country. */
       //   $price = $this->twilio->pricing->v1->phoneNumbers
       //                                     ->countries($country)
       //                                     ->fetch();
       //   if($price) {
       //     dd($price);
       //   } else {
       //     print 'Retrieving the pricing information failed. Please try again';
       //   }
       // } catch (Exception $e) {
       //   print 'Error: ' . $e->getMessage();
       // }
   
        $local = $this->twilio->availablePhoneNumbers("US")
                ->local
                ->read(["areaCode" => 510], 20);

        foreach ($local as $record) {
            print($record->friendlyName);
        }
    }


}
