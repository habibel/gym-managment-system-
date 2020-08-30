<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function changepass(){ return view('changepass');}
   
    function updatepass(Request $request)
    {        $user = User::all()->first();
        if( $user->password== $request->input('Current')){
            if($request->input('new')==$request->input('Confirm'))
        {   $user->password = $request->input('new');
            $user->save();return redirect('settings')->with('data',$request->session()->flash("mssg","password changed"));}
       } 
       else{
        $request->session()->flash("msg","password  incorrect or pass and 
        confirm pass are not the same");
        return view('changepass');
    }
        
        return view('changepass');
    
    }
}
