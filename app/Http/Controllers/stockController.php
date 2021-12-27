<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class stockController extends Controller
{
    public function stock(){
        $stock=Stock::all();
        
        return view('backend.layout.stock.stock',compact('stock'));

    }
}
