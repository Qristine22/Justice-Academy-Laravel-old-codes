<?php

namespace App\Http\Controllers\Admin\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Library\VideoLectureRequest;
use App\Models\VideoLecture;
use Illuminate\Http\Request;

class VideoLectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoLectures = VideoLecture::orderBy('id', 'DESC')->paginate(10);

        return view('admin.library.video-lecture.index', [
            'videoLectures' => $videoLectures,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.video-lecture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoLectureRequest $request)
    {
        VideoLecture::insert([
            'topic_en' => $request->topic_en,
            'topic_am' => $request->topic_am,
            'topic_ru' => $request->topic_ru,
            'lecturer_en' => $request->lecturer_en,
            'lecturer_am' => $request->lecturer_am,
            'lecturer_ru' => $request->lecturer_ru,
            'video' => $request->video,
        ]);

        return redirect(route('admin.library.video-lecture.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoLecture  $videoLecture
     * @return \Illuminate\Http\Response
     */
    public function show(VideoLecture $videoLecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoLecture  $videoLecture
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoLecture $videoLecture)
    {
        return view('admin.library.video-lecture.edit', [
            'videoLecture' => $videoLecture,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoLecture  $videoLecture
     * @return \Illuminate\Http\Response
     */
    public function update(VideoLectureRequest $request, VideoLecture $videoLecture)
    {
        $videoLecture->update([
            'topic_en' => $request->topic_en,
            'topic_am' => $request->topic_am,
            'topic_ru' => $request->topic_ru,
            'lecturer_en' => $request->lecturer_en,
            'lecturer_am' => $request->lecturer_am,
            'lecturer_ru' => $request->lecturer_ru,
            'video' => $request->video,
        ]);

        return redirect(route('admin.library.video-lecture.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoLecture  $videoLecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoLecture $videoLecture)
    {
        $videoLecture->delete();
        return redirect(route('admin.library.video-lecture.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $videoLectures = VideoLecture::onlyTrashed()->paginate(10);

        return view('admin.library.video-lecture.recycleBin', [
            'videoLectures' => $videoLectures,
        ]);
    }



    public function recycleBinRestore($id)
    {
        VideoLecture::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = VideoLecture::withTrashed()->findOrFail($id);
        $item->forceDelete();

        return redirect()->back();
    }
}
