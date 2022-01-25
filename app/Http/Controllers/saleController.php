<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Medicine;
use App\Models\Sale;
use App\Models\Saledetails;
use App\Models\Stock;
use Illuminate\Http\Request;

class saleController extends Controller
{
    public function sale(){
        $medicine=Stock::all();
        $customer=Customer::all();
        return view('backend.layout.sale.sale',compact('medicine','customer')); 
    }
    public function salemanage(){
       $sale=Sale::all();
        //dd($sale);
        return view('backend.layout.sale.managesale',compact('sale'));
    }

    public function post( Request $request){

        $carts=session()->get('cart');

        $total=array_sum(array_column($carts,'sub_total'));

        $saleid=Sale::create([
            'sale_date'=>$request->sale_date,
            'customer_id'=>$request->customer_name,
            'total_price'=>$total,
            'sale_by'=>auth()->user()->id,

        ]);


        $carts=session()->get('cart');



            foreach ($carts as $cart){

          $details =  Saledetails::create([
                'sale_id' => $saleid->id,
                'medicine_id' => $cart['medicine_id'],
                'qty' => $cart['qty'],
                'sale_price' => $cart['sale_price'],
                'sub_total' => $cart['sale_price'] * $cart['qty'],
            ]);


            $stock=Stock::where('medicine_id',$cart['medicine_id'])->first();

//dd($stock);

if($stock)
{
    if($stock->qty > $cart['qty']){
        $stock->update([
            'qty' =>$stock->qty - $cart['qty']
        ]);
    }else{
        return redirect()->back()->with('message','Quantity is Low');
    }


}else{

    Stock::create([

        'medicine_id'=>$cart['medicine_id'],
        'qty'=> $cart['qty'],

    ]);


}



    }
    $request->session()->forget('cart');
return redirect()->route('sale.details',$saleid);


}



    public function cart(Request $request)
    {
        //$medicine=medicine::all();


        $medicine = Medicine::find($request->medicine_name);





        if(!$medicine) {


            abort(404);

        }


        $cart = session()->get('cart');

        $stock=Stock::where('medicine_id',$medicine->id)->first();

        if($stock->qty < $request->qty){

            return redirect()->back()->with('message',' Requested medicine Quantity is Low');
        }

        // if cart is empty then this the first medicine
        if(!$cart) {

            $cart = [
                    $medicine->id  => [
                        'medicine_id' => $medicine->id,
                        "medicine_name" => $medicine->medicine_name,
                        "sale_price" => $medicine->sale_price,
                        "qty" => $request->qty,
                        'sub_total' =>$medicine->sale_price * $request->qty
                    ]

            ];

            session()->put('cart', $cart);

            //dd($cart);

            return redirect()->back()->with('success', 'medicine added to cart successfully!');
        }


        if(isset($cart[$medicine->id])) {



            $cart[$medicine->id]['qty']= $cart[$medicine->id]['qty']+$request->qty;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'medicine added to cart successfully!');

        }


        $cart[$medicine->id] = [
                            'medicine_id' => $medicine->id,
                            "medicine_name" => $medicine->medicine_name,
                            "sale_price" => $medicine->sale_price,
                            "qty" => $request->qty,
                            'sub_total' =>$medicine->sale_price * $request->qty
        ];

        session()->put('cart', $cart);



        return redirect()->back()->with('success', 'medicine added to cart successfully!');
    }
    public function pos_forget (Request $request)
    {
        if(session()->has('cart'))
        {
            $request->session()->forget('cart');
            return redirect()->back();
        }

return redirect()->back();

    }
    public function details($id){
        $saledetails=Saledetails::where('sale_id',$id)->get();
       
        return view('backend.layout.sale.saledetails',compact('saledetails','id'));
        
    } 

}
