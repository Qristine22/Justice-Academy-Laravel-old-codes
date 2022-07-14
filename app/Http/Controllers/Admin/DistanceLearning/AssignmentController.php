<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;

// Models
use App\Models\DistanceLearningCourse;
use Illuminate\Support\Facades\Storage;
use App\Models\DistanceLearningAssignment;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = DistanceLearningAssignment::orderBy('id', 'DESC')->paginate(10);

        return view('admin.distance-learning.assignment.index', [
            'assignments' => $assignments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DistanceLearningCourse::all();

        return view('admin.distance-learning.assignment.create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request)
    {
        $link = null;
        if(!empty($request->file('link'))){
            $link = $request->file('link')->store('distance-learning/assignments');
        }

        DistanceLearningAssignment::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'course_id' => $request->course_id,
            'link' => $link,
        ]);

        return redirect(route('admin.distance-learning.assignment.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearningAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearningAssignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearningAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearningAssignment $assignment)
    {
        $courses = DistanceLearningCourse::all();

        return view('admin.distance-learning.assignment.edit', [
            'assignment' => $assignment,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearningAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, DistanceLearningAssignment $assignment)
    {
        $link = $request->linkHidden;

        if(!empty($request->link)){
            Storage::delete($link);
            $link = $request->file('link')->store('distance-learning/assignments');
        }
        $assignment->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'course_id' => $request->course_id,
            'link' => $link,
        ]);

        return redirect(route('admin.distance-learning.assignment.index'));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearningAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearningAssignment $assignment)
    {
        $assignment->delete();
        return redirect(route('admin.distance-learning.assignment.index'));  
    }












    // recycle bin
    public function recycleBin()
    {
        $assignments = DistanceLearningAssignment::onlyTrashed()->paginate(10);

        return view('admin.distance-learning.assignment.recycleBin', [
            'assignments' => $assignments,
        ]);
    }



    public function recycleBinRestore($id)
    {
        DistanceLearningAssignment::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = DistanceLearningAssignment::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->link);

        return redirect()->back();
    }
}
