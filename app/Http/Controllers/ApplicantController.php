<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Applicant;
use App\Models\Attachment;
use App\Models\Employee;
use App\Models\User;

use function Ramsey\Uuid\v1;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::with('applicants')->get();
        return view('employee.index', ['users' => $users]);
        
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.employee_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'EmplID'=>'required',
            'fullname'=>'required',
            'gender'=>'required',
            'contact'=>'required',
            'job_title'=>'required',
            'photo'=>'required',
            'hire_date'=>'required',
            'salary'=>'required',
            'department'=>'required',
            'Employee_status'=>'required',
        ]);
        // handle file to upload
        if($request->hasFile('photo')){
            // get filename to upload
            $filenameWithExt =$request->file('photo')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('photo')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('photo')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        
        
        // create posty
         $employee = new Applicant;
         $employee->firstname=$request->input('EmplID');
         $employee->firstname=$request->input('fullname');
         $employee->gender=$request->input('gender');
         $employee->gender=$request->input('DOB');
         $employee->gender=$request->input('contact');
         $employee->gender=$request->input('job_title');
         $employee->gender=$request->input('hire_date');
         $employee->gender=$request->input('department');
         $employee->gender=$request->input('salary');
         $employee->gender=$request->input('Employee_status');
         $employee->users_id=auth()->user()->id;
         $employee->save();

        // create attachment to employee
         $attachments = new Attachment;
         $attachments->photo=$fileNameToStore;
         $attachments->save();
        return redirect('/employee')->with('success','New records is added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $user_id=auth()->user()->id;
        // $user =User::find($user_id);
        // return view('applicant.myapp')->with('applicant',$user->applicant);
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
    }

//     public function country(){
//         $districts = District::all();
//         $regions = Region::all();
//         return view('applicant.applicant_register',compact('districts','regions'));
//     }
}
