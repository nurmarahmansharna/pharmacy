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
        // dd($customer);
        return view('backend.layout.supplier.managesupplier',compact('supplier'));
    }
    public function suppliercreate(Request $request){
      Supplier::create([
          'supplier_name'=>$request->supplier_name,
          'phone'=>$request->phone,
          'address'=>$request->address,
          'email'=>$request->email,

      ]);
      return redirect()->back();
    }
}
