<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Program;


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


}
