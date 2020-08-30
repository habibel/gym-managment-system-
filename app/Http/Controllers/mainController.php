<?php

namespace App\Http\Controllers;

use App\Atlete;

use Illuminate\Http\Request;
use App\User;
use App\Payment;
use Carbon\Carbon;
use Illuminate\support\facades\DB;


class mainController extends Controller
{
    function login(){return view('login');}



    function home(){
        $count = Atlete::all()->count();
        $at = DB::table('atletes')
        ->join('payments', 'atletes.id', '=', 'payments.atlete_id')
        ->select('atletes.*', 'payments.*')
        ->get();
        return view('home',['all'=>$at])->with('data',session()->flash("count",$count));
         }


function searchhome(Request $request){
    $keyword = isset($_GET['search']) ? $_GET['search'] : null;

    $item = DB::table('atletes')
    ->join('payments', 'atletes.id', '=', 'payments.atlete_id')
    ->select('atletes.*', 'payments.*')
    ->where('atletes.name','LIKE',$keyword)
    ->get();
        
   
    return view('home',['all'=> $item]);
                
            }


    function atlete(){
        $atlete = Atlete::all();
        $count = Atlete::all()->count();
        
        return view('atlete',['all'=>$atlete])->with('data',session()->flash("count",$count));
        }



    



    function settings(){
        $count = Atlete::all()->count();
         
        return view('settings')->with('data',session()->flash("count",$count));}



  
    function addatlete(){return view('addatlete');}
    
    
    
    
    function log(Request $request){
        $user = User::all()->first();
        if( $user->password== $request->input('password') && $user->user_name== $request->input('user_name')){
             return redirect('home');
                                    }
        else{
            $request->session()->flash("msg","password or user name are incorrect");
            return view('login');
        }

    }

    function storea(Request $request){
        $atlete = new Atlete();
        $carbon = new Carbon();
        $atlete->name =$request->input("name");
        $atlete->prenom =$request->input("last_name");
        $atlete->tel =$request->input("tel");
        $atlete->gender =$request->input("gender");
        $atlete->dateinscription =$carbon;
        $atlete->save();
        $payment =  new Payment;
        $carbon = new Carbon();
        $carbon= $carbon->month;
        $payment->atlete_id= $atlete->id;
        $payment->month= $carbon;
        $payment->amount=300;
      
        
        $payment->save();
        return redirect('/atlete');
     }

       
        public function editatlete($id , Request $request){
            $atlete = Atlete::find($id);
           
            return view('/editatlete',['item'=>$atlete]);
        }
        public function updateatlete(Request $reques, $id){
            $atlete = Atlete::find($id);
            $atlete->name = $reques->input('name');
            $atlete->prenom = $reques->input('last_name');
            $atlete->tel = $reques->input('tel');
            $atlete->gender =$reques->input("gender");
            $atlete->save();
        return redirect('/atlete');
        }
        function deleteatlete($id)
        {
            $atlete = Atlete::find($id);
            $atlete->delete();
            return redirect('/atlete');
        }
    function searchatlete(Request $request){
        $keyword = isset($_GET['search']) ? $_GET['search'] : null;

        $atletes = DB::table('atletes')
           
            ->where('atletes.name','=',0);
            
        if ($keyword != null) {
            $atletes->where('atletes.name','like','%'.$keyword.'%');
              
        }
        $users = $atletes->get();
        
        return view('atlete',['all'=> $users]);

            
        }
    }