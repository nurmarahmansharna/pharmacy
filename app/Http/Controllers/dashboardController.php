<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Medicine;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dash(){
        $salevalue=Sale::sum('total_price');
        $purchasevalue=Purchase::sum('total_price');
        $medicine=Medicine::all()->count();
        $user=User::all()->count();
        $customer=Customer::all()->count();
        $supplier=Supplier::all()->count();
        return view('backend.layout.dashboard.dashboard',compact('salevalue','purchasevalue','medicine','user','customer','supplier'));

    }
}
