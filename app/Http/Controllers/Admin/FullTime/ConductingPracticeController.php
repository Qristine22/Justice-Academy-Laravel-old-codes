<?php

namespace App\Http\Controllers\Admin\FullTime;

use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Models\ConductingPractice;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;

class ConductingPracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductingPractice = ConductingPractice::paginate(10);

        return view('admin.full-time-education.conducting-practice.index', [
            'conductingPractice' => $conductingPractice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.full-time-education.conducting-practice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('full-time-education/conducting-practices');

        ConductingPractice::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.conducting-practice.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConductingPractice  $conductingPractice
     * @return \Illuminate\Http\Response
     */
    public function show(ConductingPractice $conductingPractice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConductingPractice  $conductingPractice
     * @return \Illuminate\Http\Response
     */
    public function edit(ConductingPractice $conductingPractice)
    {
        return view('admin.full-time-education.conducting-practice.edit', [
            'conductingPractice' => $conductingPractice,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConductingPractice  $conductingPractice
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, ConductingPractice $conductingPractice)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('full-time-education/conducting-practices');
        }

        $conductingPractice->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.conducting-practice.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConductingPractice  $conductingPractice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConductingPractice $conductingPractice)
    {
        $conductingPractice->delete();
        return redirect(route('admin.full-time-education.conducting-practice.index'));
    }








    // recycle bin
    public function recycleBin()
    {
        $conductingPractice = ConductingPractice::onlyTrashed()->paginate(10);

        return view('admin.full-time-education.conducting-practice.recycleBin', [
            'conductingPractice' => $conductingPractice,
        ]);
    }



    public function recycleBinRestore($id)
    {
        ConductingPractice::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = ConductingPractice::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();

        return redirect()->back();
    }
}
