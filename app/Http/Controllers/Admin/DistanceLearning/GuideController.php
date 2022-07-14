<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use App\Models\DistanceLearningGuide;
use Illuminate\Support\Facades\Storage;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides = DistanceLearningGuide::orderBy('id', 'DESC')->paginate(10);

        return view('admin.distance-learning.guide.index', [
            'guides' => $guides,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distance-learning.guide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $request->validate([
            'img' => 'required',
        ]);

        $pdf = $request->file('pdf')->store('distance-learning/guide');
        $img = $request->file('img')->store('distance-learning/guide');

        DistanceLearningGuide::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
        ]);

        return redirect(route('admin.distance-learning.guide.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearningGuide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearningGuide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearningGuide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearningGuide $guide)
    {
        return view('admin.distance-learning.guide.edit', [
            'guide' => $guide,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearningGuide  $guide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DistanceLearningGuide $guide)
    {
        $pdf = $request->pdfHidden;
        $img = $request->imgHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('distance-learning/guide');
        }
        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('distance-learning/guide');
        }

        $guide->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.distance-learning.guide.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearningGuide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearningGuide $guide)
    {
        Storage::delete($guide->pdf);
        Storage::delete($guide->img);
        $guide->delete();

        return redirect(route('admin.distance-learning.guide.index'));
    }
}
