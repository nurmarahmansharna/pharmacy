<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Stock;
use App\Models\Purchasedetails;
use Illuminate\Http\Request;

class purchaseController extends Controller
{
    public function purchase(){
        $medicine=Medicine::all();
        $supplier=Supplier::all();
        return view('backend.layout.purchase.addpurchase',compact('medicine','supplier'));
    }
    public function managepurchase(){
        $purchase=Purchase::with('User')->orderBy('id','desc')->paginate(8);

        return view('backend.layout.purchase.managepurchase',compact('purchase'));
    }


    public function cart(Request $request)
    {
        //$product=product::all();


        $medicine=Medicine::find($request->medicine_name);





        if(!$medicine) {


            abort(404);

        }


        $cart = session()->get('cart');

        
        if(!$cart) {

            $cart = [
                    $medicine->id  => [
                        "medicine_id" => $medicine->id,
                        "medicine_name" => $medicine->medicine_name,
                        "buy_price" => $request->buy_price,
                        "qty" => $request->qty,
                        "produced_date" => $request->produced_date,
                        "expired_date" => $request->expired_date,
                        'sub_total' =>$request->buy_price * $request->qty
                    ]

            ];

            session()->put('cart', $cart);

            //dd($cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }


        if(isset($cart[$medicine->id])) {



            $cart[$medicine->id]['qty']= $cart[$medicine->id]['qty']+$request->qty;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }


        $cart[$medicine->id] = [
            "medicine_id" => $medicine->id,
            "medicine_name" => $medicine->medicine_name,
            "buy_price" => $request->buy_price,
            "qty" => $request->qty,
            "produced_date" => $request->produced_date,
            "expired_date" => $request->expired_date,
            'sub_total' =>$request->buy_price * $request->qty
        ];

        session()->put('cart', $cart);



        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function forget (Request $request)
    {
        if(session()->has('cart'))
        {
            $request->session()->forget('cart');
            return redirect()->back();
        }

return redirect()->back();

    }
    public function post( Request $request){
        //$request->session()->flash('cart');

        $carts=session()->get('cart');
        //dd($carts);
        $total=array_sum(array_column($carts,'sub_total'));

        $purchaseid=Purchase::create([
            
            'purchase_date'=>$request->purchase_date,
            'challan_no'=>$request->challan_no,
            'supplier_id'=>$request->supplier_name,
            'total_price'=>$total,
            'received_by'=>auth()->user()->id,

        ]);


        $carts=session()->get('cart');
        //dd($carts);


            foreach ($carts as $cart){

          $details=Purchasedetails::create([
                'purchase_id' => $purchaseid->id,
                'medicine_id' => $cart['medicine_id'],
                'qty' => $cart['qty'],
                'unit_price' => $cart['buy_price'],
                'sub_total' => $cart['buy_price'] * $cart['qty'],
            ]);


            $stock=Stock::where('medicine_id',$cart['medicine_id'])->first();

//dd($stock);

if($stock)
{
    $stock->update([
        'qty' =>$stock->qty + $cart['qty'],
        'produced_date'=> $cart['produced_date'],
        'expired_date'=> $cart['expired_date']
    ]);

}
else
{

    Stock::create([

        'medicine_id'=>$cart['medicine_id'],
        'qty'=> $cart['qty'],
        'produced_date'=> $cart['produced_date'],
        'expired_date'=> $cart['expired_date'],

    ]);
}



    }
    $request->session()->forget('cart');
return redirect()->route('manage.purchase',$purchaseid);


}
public function details($id){
    $purchasedetails=Purchasedetails::where('purchase_id',$id)->get();
    
    return view('backend.layout.purchase.purchasedetails',compact('purchasedetails'));
    
} 

    
}
