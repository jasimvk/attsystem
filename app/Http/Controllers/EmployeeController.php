<?php

namespace App\Http\Controllers;

use App\Models\checkin;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Empty_;
use Symfony\Component\Console\Input\Input;

class EmployeeController extends Controller
{
    public function index(){

        $employees = Employee::get();


        return view('employees.home', ['employees' => $employees]);
    }
    public function manage(){

        $employees = Employee::get();

        return view('employees.list', ['employees' => $employees]);
    }

    public function create(){
        return view ('employees.new');
    }

    public function store(Request $request){
        
      
        //validate
        $request->validate([
            'uniqueId' => 'required|unique:employees|min:6|max:6'
        ]);
        $employees = new Employee();
        
        $employees->employee_name = $request->employee_name;
        $employees->uniqueId = $request->uniqueId;
     


        $employees->save();

        return redirect('/manage-employees')->withSuccess('New Employee Added');
    }
    

    public function edit($id){
        //dd($id); 
        $employees = Employee::where('id',$id)->first();
 
        return view('employees.edit', ['employees' => $employees]);
     }

     public function update(Request $request, $id){

        $request->validate([
            'uniqueId' => 'required|min:6|max:6'
        ]);

        $employees = Employee::whereId($id)->first();

        $employees->employee_name = $request->employee_name;
        $employees->uniqueId = $request->uniqueId;
        $employees->status = $request->status;

        $employees->save();

        return redirect('/manage-employees')->withSuccess('Employee details updated');
    }

    public function destroy($id){
        $employees = Employee::whereId($id)->first();
        $employees->delete();
        return redirect('/manage-employees')->withSuccess(' '. $employees->employee_name . ' details deleted');
    }

    public function list(){
        return view ('employees.listEmployees');
    }




    public function checkin(Request $request)
    {   
       
       
        $user = Employee::where('uniqueId','=', $request->input('uniqueId'))
                ->where('status', '=' , 'active')
                ->first();
        if ($user!=null){
            
        $checkin = new checkin();

       
        $checkin->uniqueId = $request->input('uniqueId');
      
       

        $checkin->save();

            
        
        return redirect('/')->withSuccess(''. $user->employee_name .' Checked in');
        }else 
        {
            return redirect('/')->withSuccess('Employee not registered/Disabled');
        }
        //
    }

    public function emplists(){
       
        //$employees = Employee::where('$checkin.uniqueId','uniqueId')->get();

        // ->select('title')->where('year', 1994)->union($books)->union($journals)->get();
       
        // $employees = DB::table('checkins')-->union(DB::table('checkins')->get());
        
        // $emp = Employee::all();
        // $check = checkin::all();

        // $employees = $emp->union(($check)->all()->whereDate('created_at',date('Y-m-d'0->get();
      
        $from = date("Y-m-d 00:00:00");
        $to = date("Y-m-d 23:59:59");
        $employees = DB::table('employees')
            ->join('checkins', 'employees.uniqueId', '=', 'checkins.uniqueId')
            ->whereBetween('checkins.created_at',([ $from ,  $to ]))
            ->select('employees.employee_name', 'checkins.created_at', 'employees.uniqueId')
            ->get();
          //  dd($employees);
        return view('employees.listEmployees', ['employees' => $employees] );
    }

    public function search(){

        return view ('employees.searchEmployees');
    }

    public function searchEmp(Request $request){
       
        $term = $request->input('employee_name');
        if ($term != ""){
            $employees = DB::table('employees')
            ->join('checkins', 'employees.uniqueId', '=', 'checkins.uniqueId')
            ->where('employee_name', '=', $term )
            ->whereYear('checkins.created_at', Carbon::now()->year)
            ->whereMonth('checkins.created_at', Carbon::now()->month)
            ->select('employees.employee_name', 'checkins.created_at', 'employees.uniqueId')
            ->orderByDesc('checkins.created_at')
            ->get();
            

        }
        else{

        }
   
       
                
            // ->where('checkins.created_at', $currentMonth)
       






        //  dd($employees);
        return view('employees.SearchEmployees', ['employees' => $employees] );
    }
    

}
