<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\DistanceLearningVideoMaterial;

class VideoMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distanceLearningVideoMaterials = DistanceLearningVideoMaterial::orderBy('id', 'DESC')->paginate(5);

        return view('admin.distance-learning.video-material.index', [
            'distanceLearningVideoMaterials' => $distanceLearningVideoMaterials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distance-learning.video-material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $video = $request->file('video')->store('distance-learning/video-materials');

        DistanceLearningVideoMaterial::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'video' => $video,
        ]);

        return redirect(route('admin.distance-learning.video-material.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearningVideoMaterial  $videoMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearningVideoMaterial $videoMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearningVideoMaterial  $videoMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearningVideoMaterial $videoMaterial)
    {
        return view('admin.distance-learning.video-material.edit', [
            'videoMaterial' => $videoMaterial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearningVideoMaterial  $videoMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, DistanceLearningVideoMaterial $videoMaterial)
    {
        $request->validate([
            'video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $video = $request->videoHidden;

        if(!empty($request->video)){
            Storage::delete($video);
            $video = $request->file('video')->store('distance-learning/video-materials');
        }

        $videoMaterial->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'video' => $video,
        ]);

        return redirect(route('admin.distance-learning.video-material.index'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearningVideoMaterial  $videoMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearningVideoMaterial $videoMaterial)
    {
        $videoMaterial->delete();
        return redirect(route('admin.distance-learning.video-material.index'));   
    }
    






    // recycle bin
    public function recycleBin()
    {
        $videoMaterials = DistanceLearningVideoMaterial::onlyTrashed()->paginate(10);

        return view('admin.distance-learning.video-material.recycleBin', [
            'videoMaterials' => $videoMaterials,
        ]);
    }



    public function recycleBinRestore($id)
    {
        DistanceLearningVideoMaterial::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = DistanceLearningVideoMaterial::withTrashed()->findOrFail($id);
        Storage::delete($item->video);
        $item->forceDelete();

        return redirect()->back();
    }
}
