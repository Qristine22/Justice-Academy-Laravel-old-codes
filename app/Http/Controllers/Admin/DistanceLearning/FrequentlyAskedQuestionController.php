<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DistanceLearning\FAQRequest;
use App\Models\FrequentlyAskedQuestion;


class FrequentlyAskedQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FAQ = FrequentlyAskedQuestion::all();

        return view('admin.distance-learning.FAQ.index', [
            'FAQ' => $FAQ,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distance-learning.FAQ.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FAQRequest $request)
    {
        FrequentlyAskedQuestion::insert([
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.distance-learning.FAQ.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrequentlyAskedQuestion  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FrequentlyAskedQuestion $FAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrequentlyAskedQuestion  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FrequentlyAskedQuestion $FAQ)
    {
        return view('admin.distance-learning.FAQ.edit', [
            'FAQ' => $FAQ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrequentlyAskedQuestion  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function update(FAQRequest $request, FrequentlyAskedQuestion $FAQ)
    {
        $FAQ->update([
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.distance-learning.FAQ.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrequentlyAskedQuestion  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrequentlyAskedQuestion $FAQ)
    {
        $FAQ->delete();
        return redirect(route('admin.distance-learning.FAQ.index'));
    }
}
