<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {

        if(auth::user()->hasRole('student')){
            return view('student_layouts.app');

         }elseif(auth::user()->hasRole('faculty')){
            return view('layouts.app');


         }elseif(auth::user()->hasRole('admin')){
            return view('layouts.app');
         }


        // {default} return view('layouts.app');
    }
}
