<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Grading_status;
use App\Models\Faculty;
use App\Models\User;
use App\Models\Faculty_subject;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    //
    public function login()
    {
        if (auth::user()->hasRole('student')) {
            return view('student.dashboard');
        }
        
        if (auth::user()->hasRole('faculty')) {
            $teacher_id = Faculty::where('teacher_id', auth()->user()->username)->value('id');
            $subjects = Faculty_subject::with('subjects')->where('teacher_id', $teacher_id)->get();
            return view('faculty.dashboard.index', compact('subjects'));
        }
        
        if (auth::user()->hasRole('admin')) {
            $programs = Program::all();
            $status = Grading_status::find(1);
            return view('admin.dashboard.index', compact('programs', 'status'));
        }
    }

    public function Users($type)
    {
        $status = Grading_status::find(1);

        $users = User::whereHas('roles', function ($query) use ($type) {
            $query->where('name', $type);
        })->get();
        return view('admin/user.index',compact('type','users','status'));
    }

    public function changePass(Request $request, $username)
    {
        $passLength = strlen($request->newPass);

        if (auth()->user()->username == $username) {
            //  users & admin changing their own password
            if (!Hash::check($request->currPass, auth::user()->password)) {
                return redirect()->back()->with('error', 'Wrong current password.');
            }
        } elseif (!auth()->user()->hasRole('admin')) {
            return redirect()->back()->with('error', 'Only admin can change other user\'s password.');
        }

        //  admin changing other users password or user changing their own password
        if ($passLength < 8 || preg_match('/\s/', $request->newPass)) {
            return redirect()->back()->with('error', 'New password is short or contains space.');
        }

        if ($request->newPass != $request->verifyPass) {
            return redirect()->back()->with('error', 'Verify password is not match to new password.');
        }

        if (auth()->user()->username == $username) {
            auth()->user()->update([
                'password' => Hash::make($request->newPass),
            ]);
            auth()->logout();
            return redirect('/login')->with('success', 'Password has been changed. Please login with your new password.');
        } else {
            User::where('username', $username)->update([
                'password' => Hash::make($request->newPass),
            ]);
            return redirect()->back()->with('success', 'User password has been changed.');
        }
    }
    
}

