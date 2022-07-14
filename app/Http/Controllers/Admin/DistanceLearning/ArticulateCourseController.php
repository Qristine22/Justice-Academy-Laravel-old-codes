<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DistanceLearning\ArticulateRequest;

// Models
use App\Models\ArticulateCourse;
use App\Models\DistanceLearningCourse;

class ArticulateCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulates = ArticulateCourse::paginate(10);

        return view('admin.distance-learning.articulate-course.index', [
            'articulates' => $articulates,
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

        return view('admin.distance-learning.articulate-course.create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticulateRequest $request)
    {
        ArticulateCourse::create([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
            'course_id' => $request->course_id,
        ]);

        return redirect(route('admin.distance-learning.articulate.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticulateCourse  $articulate
     * @return \Illuminate\Http\Response
     */
    public function show(ArticulateCourse $articulate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticulateCourse  $articulate
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticulateCourse $articulate)
    {
        $courses = DistanceLearningCourse::All();

        return view('admin.distance-learning.articulate-course.edit', [
            'articulate' => $articulate,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticulateCourse  $articulate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticulateCourse $articulate)
    {
        $articulate->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
            'course_id' => $request->course_id,
        ]);

        return redirect(route('admin.distance-learning.articulate.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticulateCourse  $articulate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticulateCourse $articulate)
    {
        $articulate->delete();
        return redirect(route('admin.distance-learning.articulate.index'));
    }






    public function recycleBin(){
        $articulates = ArticulateCourse::onlyTrashed()->paginate(10);

        return view('admin.distance-learning.articulate-course.recycleBin', [
            'articulates' => $articulates,
        ]);
    }


    public function recycleBinRestore($id)
    {
        ArticulateCourse::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = ArticulateCourse::withTrashed()->findOrFail($id);
        $item->forceDelete();

        return redirect()->back();
    }
}
