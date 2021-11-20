<?php

namespace App\Http\Controllers;
use App\Models\Generic;
use Illuminate\Http\Request;

class genericController extends Controller
{
    public function generic(){
        $generic=Generic::all();
        return view('backend.layout.generic.generic',compact('generic'));
    }
    public function genericcreate(Request $request){
        Generic::create([
            'generic_name'=>$request->generic_name,
            'status'=>$request->active,
        ]);
        return redirect()->back();
    }
}
