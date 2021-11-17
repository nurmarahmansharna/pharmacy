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
        // dd($customer);
        return view('backend.layout.customer.managecustomer',compact('customer'));
    }

public function customercreate(Request $request){
    Customer::create([
        'customer_name'=>$request->customer_name,
        'email'=>$request->email,
        'address'=>$request->address,
        'phone'=>$request->phone,
        
    ]);
return redirect()->back();
}
}

