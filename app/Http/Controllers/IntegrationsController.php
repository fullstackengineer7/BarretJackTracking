<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrationsController extends Controller
{
    public function index()
    {
        return view('admin.integrations');
    }
}
