<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purchaseController extends Controller
{
    public function purchase(){
        return view('backend.layout.purchase.addpurchase');
    }
    public function managepurchase(){
        return view('backend.layout.managepurchase');
    }
}
