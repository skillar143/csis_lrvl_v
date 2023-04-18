<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    //
    public function login()
    {
         if(auth::user()->hasRole('student')){
             return view('student.dashboard');

         }

         if(auth::user()->hasRole('faculty')){
            return view('faculty/dashboard.index');

         }

         if(auth::user()->hasRole('admin')){
            $programs = Program::all();
            return view('admin/dashboard.index',compact('programs'));
         }
    }

    public function changePass(Request $request, $username)
    {

        $passLenght = strlen($request->newPass);

    if (Hash::check($request->input('currPass'), auth::user()->password)) {
        if( $passLenght >= '8'){
            if( $request->newPass == $request->verifyPass){
                User::where('username','=',$username)->update([
                    'password' =>$request->newPass,
                    ]);
                return redirect()->back()->with('success', 'Password is changed.');
            }
            //else
            return redirect()->back()->with('error', 'Verify password is not match to new password.');
        }
        //else
        return redirect()->back()->with('error', 'New password is short.');
    }
    //else
    return redirect()->back()->with('error', 'Wrong current password.');



    }

}
