<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\Medicine;
use Illuminate\Http\Request;

class typeController extends Controller
{
    public function type(){
        $type=Type::all();
         //dd($type);
        return view('backend.layout.type.type',compact('type'));
    }
    public function typecreate(Request $request){
        Type::create([
            'medicine_type'=>$request->medicine_type,
            'status'=>$request->active,
        ]);
        return redirect()->back()->with('msg','Medicine type created successfully.');
    }
    public function delete($id){
        $types=Type::find($id);

        if($types){
            $types->delete();
        return redirect()->back()->with('msg','Medicine type is delete successfully');
        }
        return redirect()->back()->with('msg','Medicine type is not deleted');
    }

    public function details($id){
        $medicine=Medicine::where('type_id',$id)->get();
        return view('backend.layout.type.type_details',compact('medicine'));
        
    } 
    public function edit($id){

        $type=Type::find($id);
        //dd($type);
        return view('backend.layout.type.edit_type',compact('type'));
    
    }
    public function update (Request $request, $id)
    {
        // dd($request->all());

        $types=Type::find($id);

        $types->update([
            'medicine_type'=>$request->medicine_type,
            'status'=>$request->active,


        ]);

        return redirect()->route('type')->with('msg','Medicine type is Updated');

    }
}

