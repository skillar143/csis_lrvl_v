<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Subject;
use App\Models\Curriculum;
use App\Models\Grading_status;


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
        $subjects = Subject::orderBy('subject_code', 'asc')
        ->where('subject_type','=','0')
        ->get();

        $rles = Subject::orderBy('subject_code', 'asc')
        ->where('subject_type','=','1')
        ->get();

            $years = [1, 2, 3, 4];
            $curriculumData = [];

            foreach ($years as $year) {
                $curriculum = Curriculum::with('subjects')
                    ->where('year', $year)
                    ->where('course_id', $id)
                    ->orderBy('subject_id', 'asc')
                    ->get();
                $curriculumData['year' . $year] = $curriculum;
            }


        $course = Program::findOrFail($id);
        $status = Grading_status::find(1);
        return view ('admin/curriculum.index', compact('course','subjects','rles','status','curriculumData'));
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
            return [
                'subject_id' => $subjectId,
                'units' => $unit,
                'course_id' => $id,
                'semester' => $sem,
                'year' => $year,
            ];
        }, $subjectIds, $units);

        $countAdded = 0;
        foreach ($newData as $data) {
            $item = Curriculum::firstOrNew([
                'subject_id' => $data['subject_id'],
                'course_id' => $data['course_id']
            ]);

            if (!$item->exists) {
                $item->fill($data);
                $item->save();
                $countAdded++;
            }
        }

        if ($countAdded == 0) {
            return redirect()->back()->with('error', 'Subject already exists');
        } elseif ($countAdded == 1) {
            return redirect()->back()->with('success', 'Subject successfully added');
        } else {
            return redirect()->back()->with('success', 'Subjects with no duplicate were added');
        }

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
    public function destroy($year ,$id)
    {
      //dd($year." ".$id);
        Curriculum::where('course_id','=',$year)
        ->where('subject_id','=',$id)
        ->delete();

        return redirect()->back()->with('delete', 'Subject deleted!');
    }
}
