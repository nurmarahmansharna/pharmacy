<?php

namespace App\Http\Controllers;
use App\Models\Generic;
use App\Models\Medicine;
use Illuminate\Http\Request;

class genericController extends Controller
{
    public function generic(){
        $generic=Generic::all();
         //dd($generic);
        return view('backend.layout.generic.generic',compact('generic'));
    }
    public function genericcreate(Request $request){
        Generic::create([
            'generic_name'=>$request->generic_name,
            'status'=>$request->active,
        ]);
        return redirect()->back()->with('msg','Medicine generic created successfully.');
    }
    public function delete($id){
        $generics=Generic::find($id);

        if($generics){
            $generics->delete();
        return redirect()->back()->with('msg','Medicine generic is delete successfully');
        }
        return redirect()->back()->with('msg','Medicine generic is not deleted');
    }
    public function details($id){
        $medicine=Medicine::where('generic_id',$id)->get();
        return view('backend.layout.generic.generic_details',compact('medicine'));

    }
    public function edit($id){

        $generic=Generic::find($id);
        //dd($type);
        return view('backend.layout.generic.edit_generic',compact('generic'));
    
    }
    public function update (Request $request, $id)
    {
        // dd($request->all());

        $generic=Generic::find($id);

        $generic->update([
            'generic_name'=>$request->generic_name,
            'status'=>$request->active,


        ]);

        return redirect()->route('generic')->with('msg','Medicine generic is Updated');

    }
}
