<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grading_status;

class StatusController extends Controller
{
    //

    public function update(Request $request){
      
        
        if(is_null($request->status)){
            $status = 0;
        }
        if($request->status == 'on'){
            $status = 1;
        }


        Grading_status::where('id','=','1')->update([
            'status' =>$status,
            'term' =>$request->term,

            ]);

            return redirect()->back()->with('update', 'curriculum status updated!');

    }
}
