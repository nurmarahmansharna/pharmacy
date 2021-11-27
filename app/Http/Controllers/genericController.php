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
    public function delete($id){
        $generics=Generic::find($id);

        if($generics){
            $generics->delete();
        return redirect()->back()->with('msg','Medicine type is delete successfully');
        }
        return redirect()->back()->with('msg','Medicine type is not deleted');
    }
}
