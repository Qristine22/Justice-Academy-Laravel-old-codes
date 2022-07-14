<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextRequest;
use App\Models\DistanceLearning;
use Illuminate\Http\Request;

class DistanceLearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distanceLearning = DistanceLearning::all();

        return view('admin.distance-learning.page.index', [
            'distanceLearning' => $distanceLearning,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distance-learning.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TextRequest $request)
    {
        DistanceLearning::insert([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.distance-learning.page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearning  $page
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearning $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearning  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearning $page)
    {
        return view('admin.distance-learning.page.edit', [
            'distanceLearning' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearning  $page
     * @return \Illuminate\Http\Response
     */
    public function update(TextRequest $request, DistanceLearning $page)
    {
        $page->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.distance-learning.page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearning  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearning $page)
    {
        //
    }
}
