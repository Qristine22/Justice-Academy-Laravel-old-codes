<?php

namespace App\Http\Controllers\Admin\Library;

use App\Models\LibraryPdf;
use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;

class OrganizingLibraryActivityController extends Controller
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
        return view('admin.library.organizing-library-activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('library/organizing-library-activities');

        LibraryPdf::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'category' => 'organizing-library-activity',
        ]);

        return redirect(route('admin.library.professional-literature.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LibraryPdf  $organizingLibraryActivity
     * @return \Illuminate\Http\Response
     */
    public function show(LibraryPdf $organizingLibraryActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LibraryPdf  $organizingLibraryActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(LibraryPdf $organizingLibraryActivity)
    {
        return view('admin.library.organizing-library-activity.edit', [
            'organizingLibraryActivity' => $organizingLibraryActivity,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LibraryPdf  $organizingLibraryActivity
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, LibraryPdf $organizingLibraryActivity)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/organizing-library-activities');
        }

        $organizingLibraryActivity->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.library.professional-literature.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LibraryPdf  $organizingLibraryActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(LibraryPdf $organizingLibraryActivity)
    {
        $organizingLibraryActivity->delete();
        return redirect(route('admin.library.professional-literature.index'));
    }





    public function recycleBinRestore($id)
    {
        LibraryPdf::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = LibraryPdf::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();

        return redirect()->back();
    }
}
