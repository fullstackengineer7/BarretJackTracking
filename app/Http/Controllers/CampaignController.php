<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
   
    public function index()
    {

    }

    public function create()
    {
        return view('admin/create-campaign');
    }

    public function detail(){
        return view('admin/campaign-detail');
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show(Campaign $campaign)
    {        
        return view('admin/campaign');
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


