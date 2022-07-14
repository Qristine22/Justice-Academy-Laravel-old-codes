<?php

namespace App\Http\Controllers\Admin\FullTime;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Models\ConductingExamVideo;
use App\Http\Requests\NamePdfRequest;

// Models
use App\Models\ConductingExam;
use Illuminate\Support\Facades\Storage;

class ConductingExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductingExam = ConductingExam::paginate(10, ['*'], 'conductingExam');
        $conductingExamVideos = ConductingExamVideo::paginate(10, ['*'], 'conductingExamVideos');

        return view('admin.full-time-education.conducting-exam.index', [
            'conductingExam' => $conductingExam,
            'conductingExamVideos' => $conductingExamVideos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.full-time-education.conducting-exam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('full-time-education/conducting-exams');

        ConductingExam::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.conducting-exam.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConductingExam  $conductingExam
     * @return \Illuminate\Http\Response
     */
    public function show(ConductingExam $conductingExam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConductingExam  $conductingExam
     * @return \Illuminate\Http\Response
     */
    public function edit(ConductingExam $conductingExam)
    {
        return view('admin.full-time-education.conducting-exam.edit', [
            'conductingExam' => $conductingExam,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConductingExam  $conductingExam
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, ConductingExam $conductingExam)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('full-time-education/conducting-exams');
        }

        $conductingExam->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.conducting-exam.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConductingExam  $conductingExam
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConductingExam $conductingExam)
    {
        $conductingExam->delete();
        return redirect(route('admin.full-time-education.conducting-exam.index'));
    }





    
    // recycle bin
    public function recycleBin()
    {
        $conductingExam = ConductingExam::onlyTrashed()->paginate(10, ['*'], 'conductingExam');
        $conductingExamVideos = ConductingExamVideo::onlyTrashed()->paginate(10, ['*'], 'conductingExamVideos');
        return view('admin.full-time-education.conducting-exam.recycleBin', [
            'conductingExam' => $conductingExam,
            'conductingExamVideos' => $conductingExamVideos,
        ]);
    }
    


    public function recycleBinRestore($id)
    {
        ConductingExam::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = ConductingExam::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();

        return redirect()->back();
    }
}
