<?php

namespace App\Http\Controllers\Admin\FullTime;

use App\Http\Controllers\Controller;
use App\Http\Requests\FullTime\ConductingExamVideoRequest;
use App\Models\ConductingExamVideo;
use Illuminate\Http\Request;

class ConductingExamVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.full-time-education.conducting-exam-video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConductingExamVideoRequest $request)
    {
        ConductingExamVideo::insert([
            'video' => $request->video,
        ]);

        return redirect(route('admin.full-time-education.conducting-exam.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConductingExamVideo  $conductingExamVideo
     * @return \Illuminate\Http\Response
     */
    public function show(ConductingExamVideo $conductingExamVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConductingExamVideo  $conductingExamVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(ConductingExamVideo $conductingExamVideo)
    {
        return view('admin.full-time-education.conducting-exam-video.edit', [
            'conductingExamVideo' => $conductingExamVideo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConductingExamVideo  $conductingExamVideo
     * @return \Illuminate\Http\Response
     */
    public function update(ConductingExamVideoRequest $request, ConductingExamVideo $conductingExamVideo)
    {
        $conductingExamVideo->update([
            'video' => $request->video,
        ]);

        return redirect(route('admin.full-time-education.conducting-exam.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConductingExamVideo  $conductingExamVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConductingExamVideo $conductingExamVideo)
    {
        $conductingExamVideo->delete();
        return redirect(route('admin.full-time-education.conducting-exam.index'));
    }



    public function recycleBinRestore($id)
    {
        ConductingExamVideo::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = ConductingExamVideo::withTrashed()->findOrFail($id);
        $item->forceDelete();

        return redirect()->back();
    }
}
