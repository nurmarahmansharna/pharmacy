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
    // dd($request->all());
    $request->validate([
        'customer_name'=>'required',
        'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
        'address'=>'required',
        'phone'=>'required|numeric|digits:11',
        
    ]);
    // dd("pass");
    Customer::create([
        'customer_name'=>$request->customer_name,
        'email'=>$request->email,
        'address'=>$request->address,
        'phone'=>$request->phone,
        
    ]);
return redirect()->route('customer.manage')->with('msg','Customer created successfully.');
 }
 public function delete($id){
    $customers=Customer::find($id);

    if($customers){
        $customers->delete();
    return redirect()->back()->with('msg','Customer is delete successfully');
    }
    return redirect()->back()->with('msg','Customer is not deleted');
}
public function edit($id){
    $cus=Customer::find($id);
    return view('backend.layout.customer.editcustomer',compact('cus'));

}
public function update (Request $request, $id)
    {
        // dd($request->all());

        $cus=Customer::find($id);

        $cus->update([
            'customer_name'=>$request->customer_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,


        ]);

        return redirect()->route('customer.manage')->with('msg','Customer Information is Updated');

    }
 
}

