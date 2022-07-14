<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DistanceLearning\MotivationalVideosRequest;

// Models
use App\Models\MotivationalVideo;
use App\Models\DistanceLearningCourse;

class MotivationalVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivationalVideos = MotivationalVideo::orderBy('id', 'DESC')->paginate(10);
        
        return view('admin.distance-learning.motivational-video.index', [
            'motivationalVideos' => $motivationalVideos,
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

        return view('admin.distance-learning.motivational-video.create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MotivationalVideosRequest $request)
    {
        MotivationalVideo::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'video' => $request->video,
            'course_id' => $request->course_id,
        ]);

        return redirect(route('admin.distance-learning.motivational-video.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MotivationalVideo  $motivationalVideo
     * @return \Illuminate\Http\Response
     */
    public function show(MotivationalVideo $motivationalVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MotivationalVideo  $motivationalVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(MotivationalVideo $motivationalVideo)
    {
        $courses = DistanceLearningCourse::all();

        return view('admin.distance-learning.motivational-video.edit', [
            'motivationalVideo' => $motivationalVideo,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MotivationalVideo  $motivationalVideo
     * @return \Illuminate\Http\Response
     */
    public function update(MotivationalVideosRequest $request, MotivationalVideo $motivationalVideo)
    {
        $motivationalVideo->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'video' => $request->video,
            'course_id' => $request->course_id,
        ]);

        return redirect(route('admin.distance-learning.motivational-video.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MotivationalVideo  $motivationalVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MotivationalVideo $motivationalVideo)
    {
        $motivationalVideo->delete();
        return redirect(route('admin.distance-learning.motivational-video.index'));
    }














    // recycle bin
    public function recycleBin()
    {
        $motivationalVideos = MotivationalVideo::onlyTrashed()->paginate(10);

        return view('admin.distance-learning.motivational-video.recycleBin', [
            'motivationalVideos' => $motivationalVideos,
        ]);
    }



    public function recycleBinRestore($id)
    {
        MotivationalVideo::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = MotivationalVideo::withTrashed()->findOrFail($id);
        $item->forceDelete();

        return redirect()->back();
    }
}
