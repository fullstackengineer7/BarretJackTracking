<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamViewController extends Controller
{
    public function index(){
        return view('admin.team-view');
    }
}
