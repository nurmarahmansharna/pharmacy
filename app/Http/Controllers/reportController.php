<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Sale;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function purchasereport(Request $request){

        if($request->from_date){
            $purchase=Purchase::where('purchase_date',$request->from_date)->orderBy('id','desc')->get();
        }

        else{
            $purchase=Purchase::orderBy('id','desc')->get();
        }

        return view('backend.layout.report.purchasereport',compact('purchase'));
    }
    public function salesreport(Request $request){

        if($request->from_date){
            $sale=Sale::where('sale_date',$request->from_date)->orderBy('id','desc')->get();
        }

        else{
            $sale=Sale::orderBy('id','desc')->get();
        }
       

        return view('backend.layout.report.salesreport',compact('sale'));
    }
    
}
