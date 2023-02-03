<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //
    public function login()
    {
         if(auth::user()->hasRole('student')){
            return view('studentdash');

         }elseif(auth::user()->hasRole('faculty')){
            return view('facultydash');


         }elseif(auth::user()->hasRole('admin')){
            return view('admindash');


         }
    }
}