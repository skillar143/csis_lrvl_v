<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use App\Models\{
        Faculty, 
        User, 
        Program, 
        Curriculum, 
        Grading_status, 
        Faculty_subject
    };


class FacultyController extends Controller
{
    
    public function index()
    {
        $faculties = Faculty::all();
        $status = Grading_status::find(1);
        return view('admin/faculty.index', compact('faculties','status'));
    }
   
    public function store(Request $request)
    {
        $password = Hash::make('password');
        $name = $request->fn." ".$request->mi.". ".$request->ln;
        $email = $request->teacherid."@test.educ";
        Faculty::create(['teacher_id' =>$request->teacherid,'name' =>$name,'sex' =>$request->gender,
         'cellphone' =>$request->contact,'address' =>$request->address]);

        User::create(["name"=> $name,"username"=> $request->teacherid,"email" => $email,"password" => "$password"])
         ->attachRole('2');
        return redirect()->back()->with('success','Faculty Added!');
    }

    public function update(Request $request, Faculty $faculty, $id)
    {
        Faculty::where('id','=',$id)->update(['teacher_id' =>$request->teacherid,'name' =>$request->name,'sex' =>$request->gender,
         'cellphone' =>$request->contact,'address' =>$request->address,]);
            return redirect()->back()->with('update', 'Faculty updated!');
    }

    public function destroy(Faculty $faculty, $id)
    {
        $user = User::where('username', $id)->first();
        if ($user) {
            $user->roles()->detach();
            Faculty::where('teacher_id','=',$id)->delete();
            User::where('username','=',$id)->delete();
        }
        return redirect()->back()->with('delete', 'Faculty deleted!');
    }


    public function viewSubject($id)
    {
        $status = Grading_status::find(1);
        $programs = Program::all();
        $my_subjects = Faculty_subject::with('subjects', 'programs')->where('teacher_id','=',$id)->get();
        $selected_program_id = null;
        $subjects = [];
        $faculty_id = $id;
 


        if(request()->has('program_id')) {
            $selected_program_id = request('program_id');
            $subjects = Curriculum::where('course_id', $selected_program_id)->get();
        }
    
        return view('admin/faculty.viewSubject', compact('my_subjects','status', 'programs', 'selected_program_id', 'subjects', 'faculty_id'));
    }

    public function storeSubject(Request $request, $id)
    {
        $existingSubject = Faculty_subject::where('course_id', $request->program_id)
        ->where('teacher_id', $id)
        ->where('subject_id', $request->subject_id)
        ->first();

    if ($existingSubject) {
        return redirect()->back()->with('error', 'Subject already added!');
    } else {
        Faculty_subject::create([
            'teacher_id' => $id,
            'subject_id' => $request->subject_id,
            'course_id' => $request->program_id,
        ]);
        return redirect()->back()->with('success', 'Subject Added!');
    }
    
    }
    
    
    public function getSubjectByProgram($program_id)
    {
        Log::debug('getSubjectByProgram called');
    
        $subjects = Curriculum::with('subjects')->where('course_id', $program_id)->get();
    
        return response()->json($subjects);
    }

    public function destroySubject($f_id, $s_id, $p_id){

        $subject = Faculty_subject::where('teacher_id', $f_id)
        ->where('subject_id', $s_id)
        ->where('course_id', $p_id)
        ->first();

    if (!$subject) {
        return redirect()->back()->with('error', 'Curriculum not found.');
    }

    $subject->delete();

    return redirect()->back()->with('error', 'Subject deleted from Faculty.');

    }

}
