<?php

namespace App\Http\Controllers;



use App\Models\Campaign;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
use App\Http\Controllers\TwilioController;
use DB;
use DateTime;

class CampaignController extends Controller
{
    protected $twilio;
    protected $us_phone_pri;
    protected $us_local_pri;
    protected $us_tollfree_pri;
    public function __construct(){
        $this->sid = getenv('TWILIO_ACCOUNT_SID');
        $this->token = getenv('TWILIO_AUTH_TOKEN');
        $this->twilio = new Client($this->sid, $this->token);

        $this->us_phone_pri = $this->getUSPhonePrice();
        $this->us_local_pri = $this->us_phone_pri->phoneNumberPrices[0]['current_price'];
        $this->us_tollfree_pri = $this->us_phone_pri->phoneNumberPrices[1]['current_price'];
    }


    public function getUSPhonePrice(){

        $country = $this->twilio->pricing->v1->phoneNumbers
                               ->countries("US")
                               ->fetch();
        // var_dump($country->phoneNumberPrices[0]['current_price']);die();
        return $country;        
    }
   
    public function create()
    {      
        $tollFree = $this->twilio->availablePhoneNumbers("US")
                   ->tollFree
                   ->read([], 20);
        return view('admin/create-campaign', ['tollFrees' => $tollFree, 'localPhones' => [], 'us_tollfree_pri' => $this->us_tollfree_pri]);
    }

    public function getLocalPhones(Request $req){

        //Get US local phone numbers
        $area_code = $req->area_code;
        $local = $this->twilio->availablePhoneNumbers("US")
                ->local
                ->read([ "areaCode" => $req->area_code ], 20);

        $tollFree = $this->twilio->availablePhoneNumbers("US")
                   ->tollFree
                   ->read([], 20);

        return view('admin/create-campaign', [ 'localPhones' => $local, 'tollFrees' => $tollFree , 'us_tollfree_pri' => $this->us_tollfree_pri, 'us_local_pri' => $this->us_local_pri]);
  
    }

    public function showTollFreePhones(){

        $tollFree = $this->twilio->availablePhoneNumbers("US")
                   ->tollFree
                   ->read([], 20);
    }

    public function createWithTollFree(){
        
    }

    public function detail(Request $req){
        $phone_number = $req->phone_number;
        $categories = DB::table('campaign_categories')->get();
        $prices = DB::table('camp_prices')->get();

        return view('admin/campaign-detail', ['categories' => $categories,
            'prices' => $prices , 'phone_number' => $phone_number]);
    }

    public function store(Request $req)
    {

        $data = [
            'title' => $req->title,
            'phone_number' => $req->phone_number,
            'forward_to' => $req->forward_to,
            'category' => $req->category,
            'record' => $req->record,
            'record_msg' => $req->recording_msg,
            'create_leads' => $req->create_leads,
            'email_noti' => "Nothing",
            'whisper_msg' => $req->whisper_msg,
            'ad_cost' => $req->ad_cost,
            'created_at' => date('Y-m-d H:i:s')   
        ];
        Campaign::create($data);
        $this->show();
    }

   
    public function show(Campaign $campaign)
    {        
        $rows = DB::table('campaigns')->get();
        return view('admin/campaign',['campaigns' => $rows]);
    }

    public function edit(Campaign $campaign)
    {
        //
    }

  
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    public function destroy(Campaign $campaign)
    {
        //
    }
}


