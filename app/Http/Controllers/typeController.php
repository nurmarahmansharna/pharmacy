<?php

namespace App\Http\Controllers;
use App\Models\Type;
use Illuminate\Http\Request;

class typeController extends Controller
{
    public function type(){
        $type=Type::all();
        return view('backend.layout.type.type',compact('type'));
    }
    public function typecreate(Request $request){
        Type::create([
            'medicine_type'=>$request->medicine_type,
            'status'=>$request->active,
        ]);
        return redirect()->back();
    }
    public function delete($id){
        $types=Type::find($id);

        if($types){
            $types->delete();
        return redirect()->back()->with('msg','Medicine type is delete successfully');
        }
        return redirect()->back()->with('msg','Medicine type is not deleted');
    }

    
}

