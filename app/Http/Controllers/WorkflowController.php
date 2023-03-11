<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkflowController extends Controller
{
    public function index(){
        return view('admin.workflow');
    }
}
