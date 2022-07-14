<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FormerRectorsBiography;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\RectorsBiographyRequest;

class FormerRectorsBiographyController extends Controller
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
        return view('admin.about.former-rectors-biography.create');
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

        FormerRectorsBiography::insert([
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
     * @param  \App\Models\FormerRectorsBiography  $formerRectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function show(FormerRectorsBiography $formerRectorsBiography)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormerRectorsBiography  $formerRectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function edit(FormerRectorsBiography $formerRectorsBiography)
    {
        return view('admin.about.former-rectors-biography.edit', [
            'formerRectorsBiography' => $formerRectorsBiography
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormerRectorsBiography  $formerRectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function update(RectorsBiographyRequest $request, FormerRectorsBiography $formerRectorsBiography)
    {
        $photo = $request->imgHidden;

        if(!empty($request->img)){
            Storage::delete($photo);
            $photo = $request->file('img')->store('about/rectors');
        }

        $formerRectorsBiography->update([
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
     * @param  \App\Models\FormerRectorsBiography  $formerRectorsBiography
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormerRectorsBiography $formerRectorsBiography)
    {
        // $formerRectorsBiography->delete();
        // Storage::delete($formerRectorsBiography->img);
        // return redirect(route('admin.about.rectors-biography.index'));
    }
}
