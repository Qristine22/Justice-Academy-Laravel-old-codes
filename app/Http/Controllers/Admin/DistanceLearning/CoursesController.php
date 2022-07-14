<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DistanceLearningCourse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DistanceLearning\CourseRequest;
use App\Http\Requests\DistanceLearning\CourseUpdateRequest;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DistanceLearningCourse::orderBy('id', 'DESC')->paginate(10);

        return view('admin.distance-learning.course.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distance-learning.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $img = $request->file('img')->store('distance-learning/courses');
        $pdf = $request->file('syllabus_pdf')->store('distance-learning/courses');

        DistanceLearningCourse::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'syllabus_en' => $request->syllabus_en,
            'syllabus_am' => $request->syllabus_am,
            'syllabus_ru' => $request->syllabus_ru,
            'syllabus_pdf_name_en' => $request->syllabus_pdf_name_en,
            'syllabus_pdf_name_am' => $request->syllabus_pdf_name_am,
            'syllabus_pdf_name_ru' => $request->syllabus_pdf_name_ru,
            'img' => $img,
            'syllabus_pdf' => $pdf
        ]);
        return redirect(route('admin.distance-learning.courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearningCourse  $course
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearningCourse $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearningCourse  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearningCourse $course)
    {
        return view('admin.distance-learning.course.edit', [
            'course' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearningCourse  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseUpdateRequest $request, DistanceLearningCourse $course)
    {
        $img = $request->imgHidden;
        $pdf = $request->pdfHidden;

        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('distance-learning/courses');
        }
        if(!empty($request->syllabus_pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('syllabus_pdf')->store('distance-learning/courses');
        }

        $course->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'syllabus_en' => $request->syllabus_en,
            'syllabus_am' => $request->syllabus_am,
            'syllabus_ru' => $request->syllabus_ru,
            'syllabus_pdf_name_en' => $request->syllabus_pdf_name_en,
            'syllabus_pdf_name_am' => $request->syllabus_pdf_name_am,
            'syllabus_pdf_name_ru' => $request->syllabus_pdf_name_ru,
            'img' => $img,
            'syllabus_pdf' => $pdf,
        ]);

        return redirect(route('admin.distance-learning.courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearningCourse  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearningCourse $course)
    {
        $course->delete();
        return redirect(route('admin.distance-learning.courses.index'));
    }














    // recycle bin
    public function recycleBin()
    {
        $courses = DistanceLearningCourse::onlyTrashed()->paginate(10);

        return view('admin.distance-learning.course.recycleBin', [
            'courses' => $courses,
        ]);
    }



    public function recycleBinRestore($id)
    {
        DistanceLearningCourse::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = DistanceLearningCourse::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->img);
        Storage::delete($item->syllabus_pdf);

        return redirect()->back();
    }
}
