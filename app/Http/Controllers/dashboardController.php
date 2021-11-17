<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dash(){
        return view('backend.layout.dashboard.dashboard');
    }
}
