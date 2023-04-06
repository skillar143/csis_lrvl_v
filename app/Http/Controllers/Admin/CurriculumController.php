<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Subject;
use App\Models\Curriculum;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $subjects = Subject::all();

        $firstyear = Curriculum::with('subjects')
            ->where('year',"=","1")
            ->where('course_id',"=",$id)
            ->get();

        $secondyear = Curriculum::with('subjects')
            ->where('course_id',"=",$id)
            ->where('year',"=","2")
            ->get();


        $thirdyear = Curriculum::with('subjects')
            ->where('course_id',"=",$id)
            ->where('year',"=","3")
            ->get();


        $fourthyear = Curriculum::with('subjects')
            ->where('course_id',"=",$id)
            ->where('year',"=","4")
            ->get();


        $course = Program::findOrFail($id);
       // dd($course->Description);
        return view ('admin/curriculum.index', compact('course','subjects','firstyear','secondyear','thirdyear','fourthyear'));
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
    public function store(Request $request, $id, $year)
    {

        $sem = $request->semester;
        $subjectIds = $request->code;
        $units = $request->unit;

        $newData = array_map(function ($subjectId, $unit) use ($id, $sem, $year) {
            return ['subject_id' => $subjectId,'units' => $unit,'course_id' => $id,'semester' => $sem,'year' => $year,];
            }, $subjectIds, $units);

        foreach ($newData as $data) {   //dagdag lang ng field dito na kilangan pa i check
            $item = Curriculum::firstOrNew(['subject_id' => $data['subject_id'],'course_id' => $data['course_id']]);
            if (!$item->exists) {
                $item->fill($data);
                $item->save();
            }
        }

        return redirect()->back()->with('success','curr Added!');

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
        //
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
    }
}
