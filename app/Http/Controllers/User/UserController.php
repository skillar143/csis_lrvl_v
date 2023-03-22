<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{


    //
    public function login()
    {
         if(auth::user()->hasRole('student')){
            return view('student.dashboard');

         }elseif(auth::user()->hasRole('faculty')){
            return view('admin/dashboard.index');

         }elseif(auth::user()->hasRole('admin')){
            return view('admin/dashboard.index');
         }
    }


}
