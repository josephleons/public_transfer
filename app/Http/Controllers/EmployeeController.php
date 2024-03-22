<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;

class EmployeeController extends Controller
{

    // configure access control
    public function __construct()
    {
        $this->middleware('auth',['except'=>['employees']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $user = Employee::all();
            
    
            return view('employees.index');

    }
    public function adminEmployee(){

       $users = User::with('employees')->get();
        return view('employee.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request){

    // }
    public function store(Request $request)
    {
        $this->validate($request,[
            'employee_id'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'surname'=>'required',
            'gender'=>'required',
            'job_title'=>'required',
            'hire_date'=>'required',
            'salary'=>'required',
            'department'=>'required',
            'status'=>'required',
            'region'=>'required',
            'district'=>'required',
            'ward'=>'required',
        ]);
      
        // create employee
        $employee = new Employee();
        $employee->employee_id = $request->input('employee_id');
        $employee->firstname = $request->input('firstname');
        $employee->middlename = $request->input('middlename');
        $employee->surname = $request->input('surname');
        $employee->gender = $request->input('gender');
        $employee->job_title = $request->input('job_title');
        $employee->hire_date = $request->input('hire_date');
        $employee->department = $request->input('department');
        $employee->salary = $request->input('salary');
        $employee->status = $request->input('status');
        $employee->user_id = auth()->user()->id;
        $employee->save();

        // add user ID to Employee
        $user = new User();
        $user->user_id=$employee->id;
        $user->save(); 
        
       //add employee ID to Country table
       $country = new Country();
       $country->region->$request->input('region');
       $country->region->$request->input('district');
       $country->region->$request->input('ward');
       $country->emp_id =$employee->id;
       $country->save();
       
        return redirect('/employees')->with('success','Application Form successful filled ');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // check if user is authenticate
        if (!auth()->check()) {
            // If not authenticated, redirect to the login page
            return redirect()->route('login');
        }
    
        // single user
        $user_id =auth()->user()->id;
        $user = User::find($user_id);
        return view('employees.show', ['user' => $user]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $comp  = Company ::find($id);
        // return view('company.index')->with('comp', $comp);
    }

}
