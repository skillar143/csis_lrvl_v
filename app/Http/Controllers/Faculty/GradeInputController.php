<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeInputController extends Controller
{
    //

    public function index()
    {
        return view('faculty/GradeInputs.index');
    }
}
