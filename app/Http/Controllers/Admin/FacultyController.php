<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //
        $faculties = Faculty::all();
        return view('admin/faculty.index', compact('faculties'));
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


    $name = $request->fn." ".$request->mi.". ".$request->ln;
//dd($name);
        Faculty::create([

            'teacher_id' =>$request->teacherid,
            'name' =>$name,
            'sex' =>$request->gender,
            'cellphone' =>$request->contact,
            'address' =>$request->address,


        ]);

        return redirect()->back()->with('success','Faculty Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty, $id)
    {
        //


        Faculty::where('id','=',$id)->update([
            'teacher_id' =>$request->teacherid,
            'name' =>$request->name,
            'sex' =>$request->gender,
            'cellphone' =>$request->contact,
            'address' =>$request->address,

            ]);

            return redirect()->back()->with('update', 'Faculty updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty, $id)
    {
        //
        Faculty::where('id','=',$id)->delete();
        return redirect()->back()->with('delete', 'Faculty deleted!');
    }
}
