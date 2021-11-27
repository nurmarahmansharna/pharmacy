<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customer(){
        return view('backend.layout.customer.addcustomer');
    }

    public function customermanage(){
        $customer=Customer::all();
        //dd($customer);
        return view('backend.layout.customer.managecustomer',compact('customer'));
    }

public function customercreate(Request $request){
    $request->validate([
        'customer_name'=>'required',
        'email'=>'required',
        'address'=>'required',
        'phone'=>'required',
        
    ]);
    Customer::create([
        'customer_name'=>$request->customer_name,
        'email'=>$request->email,
        'address'=>$request->address,
        'phone'=>$request->phone,
        
    ]);
return redirect()->route('customer.manage')->with('msg','Product created successfully.');
 }
}

