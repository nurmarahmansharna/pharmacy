<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('backend.layout.login.login');
    }
    public function logout ()
    {

        Auth::logout();
        return redirect()->route('login');
    }
    public function login_user ( Request $request)
    {

        // dd($request->all());
        $req=$request->except('_token');
        // dd(Auth::attempt($req));
        if(Auth::attempt($req)){
            if(auth()->user()->type=='admin'){
                return redirect()->route('dashboard');
            }
            elseif(auth()->user()->type=='manager'){
                return redirect()->route('sale');
            }
            elseif(auth()->user()->type=='salesman'){
                return redirect()->route('sale');
            }
            else{
                Auth::logout();
            }

        }
        return redirect()->back()->with('message','Wrong Password Or User Name.........');
    }
}