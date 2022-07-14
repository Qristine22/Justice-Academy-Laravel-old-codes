<?php

namespace App\Http\Controllers\Admin\FullTime;

use Illuminate\Http\Request;
use App\Models\TrainingProgram;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FullTime\TrainingProgramRequest;

class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainingPrograms = TrainingProgram::orderBy('id', 'DESC')->paginate(10);

        return view('admin.full-time-education.training-program.index', [
            'trainingPrograms' => $trainingPrograms,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.full-time-education.training-program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingProgramRequest $request)
    {
        $request->validate([
            'pdf' => 'required',
        ]);
        $pdf = $request->file('pdf')->store('full-time-education/training-program');

        TrainingProgram::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'category' => $request->category,
            'year' => $request->year,
            'description' => $request->description,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.training-program.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingProgram  $trainingProgram
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingProgram $trainingProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingProgram  $trainingProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingProgram $trainingProgram)
    {
        return view('admin.full-time-education.training-program.edit', [
            'trainingProgram' => $trainingProgram,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainingProgram  $trainingProgram
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingProgramRequest $request, TrainingProgram $trainingProgram)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('full-time-education/training-program');
        }
        $trainingProgram->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'category' => $request->category,
            'year' => $request->year,
            'pdf' => $pdf,
            'description' => $request->description,
        ]);

        return redirect(route('admin.full-time-education.training-program.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingProgram  $trainingProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingProgram $trainingProgram)
    {
        $trainingProgram->delete();
        return redirect(route('admin.full-time-education.training-program.index'));
    }
    







    // recycle bin
    public function recycleBin()
    {
        $trainingPrograms = TrainingProgram::onlyTrashed()->paginate(10);

        return view('admin.full-time-education.training-program.recycleBin', [
            'trainingPrograms' => $trainingPrograms,
        ]);
    }



    public function recycleBinRestore($id)
    {
        TrainingProgram::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = TrainingProgram::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();

        return redirect()->back();
    }
}
