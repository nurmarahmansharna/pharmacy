<?php

namespace App\Http\Controllers;
use App\Models\Medicine;
use App\Models\Generic;
use App\Models\Type;


use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class medicineController extends Controller
{
    public function medicine(){
        $medicine_type=Type::all();
        $generic_type=Generic::all();
        return view('backend.layout.medicine.addmedicine',compact('medicine_type','generic_type'));

    }
    public function medicinemanage(){
        $medicines=Medicine::all();
        return view('backend.layout.medicine.managemedicine',compact('medicines'));

    }
    public function medicinecreate(Request $request){

        Medicine::create([
      'medicine_name'=>$request->medicine_name,
      'sale_price'=>$request->sale_price,
      'description'=>$request->description,
      'type_id'=>$request->type,
      'generic_id'=>$request->generic,
      'availability'=>$request->availability,
    
    
 ]);
 return redirect()->back();
     }
}
