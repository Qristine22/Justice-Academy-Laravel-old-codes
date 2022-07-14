<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\GalleryVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\GalleryRequest;

class GalleryVideoController extends Controller
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
        return view('admin.about.gallery-video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $request->validate([
            'link' => 'required',
        ]);

        GalleryVideo::insert([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'link' => $request->link,
            'full_date' => $request->full_date,
            'year' => $request->year,
        ]);

        return redirect(route('admin.about.gallery.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryVideo  $galleryVideo
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryVideo $galleryVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryVideo  $galleryVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryVideo $galleryVideo)
    {
        return view('admin.about.gallery-video.edit', [
            'galleryVideo' => $galleryVideo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryVideo  $galleryVideo
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, GalleryVideo $galleryVideo)
    {
        $galleryVideo->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'link' => $request->link,
            'full_date' => $request->full_date,
            'year' => $request->year,
        ]);

        return redirect(route('admin.about.gallery.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryVideo  $galleryVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryVideo $galleryVideo)
    {
        $galleryVideo->delete();
        return redirect(route('admin.about.gallery.index'));
    }








    public function recycleBinRestore($id)
    {
        GalleryVideo::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {
        $item = GalleryVideo::withTrashed()->findOrFail($id);
        $item->forceDelete();
        return redirect()->back();
    }
}
