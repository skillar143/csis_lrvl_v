<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\{
    Student,
    User,
    Program,
    Curriculum,
    Assessment,
    Grading_status
};

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index($s_status)
    {
        //
        $programs = Program::all();
        $students = Student::where('status','=',$s_status)->with('program')->get();
        $status = Grading_status::find(1);

        return view ('admin/student.index',compact('students','programs','status','s_status'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $password = Hash::make('password');
        $name = $request->fn." ".$request->mi.". ".$request->ln;
        $email = $request->studentid."@student.educ";

        Student::create(['student_id' =>$request->studentid,'name' =>$name,'program_id' =>$request->course,
            'cellphone' =>$request->contact,'sex' =>$request->gender,'bday' =>$request->bday,'bplace' =>$request->bplace,
            'address' =>$request->address,'status' =>$request->status,'year' =>$request->year]);

        User::create(["name"=> $name,"username"=> $request->studentid,"email" => $email,"password" => "$password"])
         ->attachRole('3');


        // if($request->status == "0"){
        //    dd("regular");
        //}
        //if($request->status == "1"){
        //    dd("irregular");
        //}
        return redirect()->back()->with('success', 'Student Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Student::where('id','=',$id)->update(['name' =>$request->name,'program_id' =>$request->course,'cellphone' =>$request->contact,
            'sex' =>$request->gender,'bday' =>$request->bday,'bplace' =>$request->bplace,'address' =>$request->address,
            'status' =>$request->status,'year' =>$request->year ]);
            return redirect()->back()->with('update', 'Student updated!');
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

        $user = User::where('username', $id)->first();
        if ($user) {
            $user->roles()->detach();

            Student::where('student_id','=',$id)->delete();
            User::where('username','=',$id)->delete();
        }
        return redirect()->back()->with('delete', 'Student deleted!');
    }
}
