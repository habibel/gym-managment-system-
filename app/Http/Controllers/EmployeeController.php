<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Carbon\Carbon;

use Illuminate\support\facades\DB;

class EmployeeController extends Controller
{
    function employee()
    {$count = Employee::all()->count();
     $employee = Employee::all();
        return view('employee',['all'=>$employee])->with('data',session()->flash("count",$count));
     }
//////////////////////
   function addemployee(){return view('addemployee');}
//////////////////////
    function storee(Request $request)
    {
        $employee = new Employee();
        $carbon = new Carbon();
        $employee->name =$request->input("name");
        $employee->prenom =$request->input("last_name");
        $employee->tel =$request->input("tel");
        $employee->gender =$request->input("gender");
        $employee->dateinscription =$carbon;
        $employee->saliare =$request->input("saliare");
        $employee->save();
        return redirect('/employee');
    }

    
    public function editemployee($id , Request $request){
        $employee = Employee::find($id);
       
        return view('/editemployee',['item'=>$employee]);
    }
    public function updateemployee(Request $reques, $id){
        $employee = Employee::find($id);
        $employee->name = $reques->input('name');
        $employee->prenom = $reques->input('last_name');
        $employee->tel = $reques->input('tel');
        $employee->gender =$reques->input("gender");
        $employee->saliare =$reques->input("saliare");
        $employee->save();
    return redirect('/employee');
    }






function deleteemployee($id)
{
$employee = Employee::find($id);
$employee->delete();
return redirect('/employee');
}

 function searchemployee(Request $request){

$keyword = isset($_GET['search']) ? $_GET['search'] : null;

$employees = DB::table('employees')
   
    ->where('employees.name','=',0);
    
if ($keyword != null) {
    $employees->where('employees.name','like','%'.$keyword.'%');
      
}
$users = $employees->get();

return view('employee',['all'=> $users]); 
}
}

