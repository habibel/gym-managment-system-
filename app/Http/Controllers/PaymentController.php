<?php

namespace App\Http\Controllers;
use App\Atlete;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
class PaymentController extends Controller
{

    function changeamount(){ return view('changeamount');}
   
    function updateamount(Request $request)
{  
    if($request->input('new')==$request->input('Confirm'))  {   
    $change = DB::table('payments')
              ->where('amount','=',$request->input('Current'))
              ->update(['amount' =>$request->input('new') ]);
              return redirect('settings')->with('data',$request->session()->flash("mssg","amount changed"));
    }
    else{
        $request->session()->flash("msg","amount  incorrect or new amount and 
            confirm amount are not the same");
            return view('changeamount');
    }
    }

    
    function payment(){
        $count = Atlete::all()->count();
        $carbon = new Carbon();
        $carbonmonth= $carbon->month;
        $carbonday= $carbon->day;
         if($carbonday==1){
         $atlete = Atlete::all('id');
         $payment= Payment::all('amount')->first();
         $atlete = $atlete->pluck('id')->toArray();
           
         
         foreach($atlete  as $item){
                 DB::table('payments')->insertOrIgnore([
                ['atlete_id' => $item, 'month' => $carbonmonth,'statu'=>'nopaid','amount'=>$payment]
            ]);
            } }

            $at = DB::table('atletes')
            ->join('payments', 'atletes.id', '=', 'payments.atlete_id')
            ->select('atletes.*', 'payments.*')
            ->get();
            return view('payment',['all'=>$at])->with('data',session()->flash("count",$count));
            }


            function month($id){
               
            $item = DB::table('atletes')
            ->join('payments', 'atletes.id', '=', 'payments.atlete_id')
            ->select('atletes.*', 'payments.*')
            ->where('payments.id','LIKE',$id)
            ->get();
        
        return view('months',['all'=>$item]);
    }
    
    public function pay($id)
    {   $item = Payment::find($id);
        if($item->statu=='pay'){
            $item->statu='nopaid';
            $item->save();
             return redirect('payment');
        }else{
       
         $item->statu='pay';
         
         $item->save();
         return redirect('payment');
        
    }}
    function searchpayment(Request $request){
        $keyword = isset($_GET['search']) ? $_GET['search'] : null;

        $item = DB::table('atletes')
        ->join('payments', 'atletes.id', '=', 'payments.atlete_id')
        ->select('atletes.*', 'payments.*')
        ->where('atletes.name','LIKE',$keyword)
        ->get();
            
       
        return view('payment',['all'=> $item]);

            
        }
    
}
