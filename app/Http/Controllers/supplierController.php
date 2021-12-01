<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function supplier(){
        return view('backend.layout.supplier.addsupplier');
    }
    public function suppliermanage(){
        $supplier=Supplier::all();
         //dd($supplier);
        return view('backend.layout.supplier.managesupplier',compact('supplier'));
    }
    public function suppliercreate(Request $request){

        // dd($request->all());
    $request->validate([
        'supplier_name'=>'required',
        'phone'=>'required|numeric|digits:11',
        'address'=>'required',
        'email'=>'required',
        
        
        
    ]);
      Supplier::create([
          'supplier_name'=>$request->supplier_name,
          'phone'=>$request->phone,
          'address'=>$request->address,
          'email'=>$request->email,

      ]);
      return redirect()->route('supplier.manage')->with('message','Supplier created successfully.');
    }
    public function delete($id){
        $suppliers=Supplier::find($id);

        if($suppliers){
            $suppliers->delete();
        return redirect()->back()->with('message','Supplier is delete successfully');
        }
        return redirect()->back()->with('message','Supplier  is not deleted');
    }
}
