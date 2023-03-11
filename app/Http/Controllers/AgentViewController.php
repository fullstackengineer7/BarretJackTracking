<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentViewController extends Controller
{
    public function index(){
        return view('admin.agent-view');
    }
}
