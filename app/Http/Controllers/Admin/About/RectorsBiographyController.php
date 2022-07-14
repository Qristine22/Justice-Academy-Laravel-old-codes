<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\RectorsBiographyRequest;

// Models
use App\Models\RectorsBiography;
use App\Models\FormerRectorsBiography;

class RectorsBiographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rectorsBiography = RectorsBiography::all();
        $foremrRectorsBiography = FormerRectorsBiography::all();

        return view('admin.about.rectors-biography.index', [
            'rectorsBiography' => $rectorsBiography,
            'foremrRectorsBiography' => $foremrRectorsBiography,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.rectors-biography.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RectorsBiographyRequest $request)
    {
        $request->validate([
            'img' => 'required',
        ]);

        $photo = $request->file('img')->store('about/rectors');

        RectorsBiography::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'biography_en' => $request->biography_en,
            'biography_am' => $request->biography_am,
            'biography_ru' => $request->biography_ru,
            'img' => $photo,
        ]);

        return redirect(route('admin.about.rectors-biography.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RectorsBiography  $rectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function show(RectorsBiography $rectorsBiography)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RectorsBiography  $rectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function edit(RectorsBiography $rectorsBiography)
    {
        return view('admin.about.rectors-biography.edit', [
            'rectorsBiography' => $rectorsBiography,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RectorsBiography  $rectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function update(RectorsBiographyRequest $request, RectorsBiography $rectorsBiography)
    {
        $photo = $request->imgHidden;

        if(!empty($request->img)){
            Storage::delete($photo);
            $photo = $request->file('img')->store('about/rectors');
        }

        $rectorsBiography->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'biography_en' => $request->biography_en,
            'biography_am' => $request->biography_am,
            'biography_ru' => $request->biography_ru,
            'img' => $photo,
        ]);

        return redirect(route('admin.about.rectors-biography.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RectorsBiography  $rectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function destroy(RectorsBiography $rectorsBiography)
    {
        // $rectorsBiography->delete();
        // Storage::delete($rectorsBiography->img);
        // return redirect(route('admin.about.rectors-biography.index'));
    }
}
