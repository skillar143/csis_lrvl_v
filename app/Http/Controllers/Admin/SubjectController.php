<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Grading_status;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $subjects = Subject::all();
        $status = Grading_status::find(1);


        return view('admin/subject.index', compact('subjects','status'));
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
        Subject::create([
            'subject_code' =>$request->code,
            'subject_description' =>$request->description,
            'subject_type' =>$request->type,
            'subject_laboratory_status' =>$request->labstatus,

        ]);

        return redirect()->back()->with('success','Subject Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Subject::where('id','=',$id)->update([
            'subject_code' =>$request->subcode,
            'subject_description' =>$request->subdescription,
            'subject_type' =>$request->type,
            'subject_laboratory_status' =>$request->labstatus,
            ]);

            return redirect()->back()->with('update', 'Subject updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Subject::where('id','=',$id)->delete();
        return redirect()->back()->with('delete', 'Subject deleted!');
    }
}
