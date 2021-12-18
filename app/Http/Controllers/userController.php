<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        return view('backend.layout.user.adduser');
    }
    public function usermanage(){
        
        $users=User::all();
        return view('backend.layout.user.manageuser',compact('users'));
    }
    public function usercreate(Request $request){

        //  $request->validate([
        //      'type'=>'required',
        //      'user_name'=>'required',
        //      'full_name'=>'required',
        //      'password'=>'required',
        //      'phone'=>'required',
       

        //  ]);
        User::create([
             
            'type'=>$request->type,
            'username'=>$request->username,
            'fullname'=>$request->fullname,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone
        ]);
        return redirect()->route('user.usermanage')->with('msg','user created successfully.');

  }
  public function delete($id){
    $user=User::find($id);

    if($user){
        $user->delete();
    return redirect()->back()->with('msg','User is delete successfully');
    }
    return redirect()->back()->with('msg','User is not deleted');
}
}
