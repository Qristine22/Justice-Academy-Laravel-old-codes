<?php

namespace App\Http\Controllers\Admin\Library;

use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\LibraryPdf;

class ProfessionalLiteratureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionalLiteratures = LibraryPdf::where('category', 'professional-literature')->paginate(10);
        $organizingLibraryActivities = LibraryPdf::where('category', 'organizing-library-activity')->paginate(10);

        return view('admin.library.professional-literature.index', [
            'professionalLiteratures' => $professionalLiteratures,
            'organizingLibraryActivities' => $organizingLibraryActivities,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.professional-literature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('library/professional-literatures');

        LibraryPdf::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'category' => 'professional-literature',
        ]);

        return redirect(route('admin.library.professional-literature.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LibraryPdf  $professionalLiterature
     * @return \Illuminate\Http\Response
     */
    public function show(LibraryPdf $professionalLiterature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LibraryPdf  $professionalLiterature
     * @return \Illuminate\Http\Response
     */
    public function edit(LibraryPdf $professionalLiterature)
    {
        return view('admin.library.professional-literature.edit', [
            'professionalLiterature' => $professionalLiterature,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LibraryPdf  $professionalLiterature
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, LibraryPdf $professionalLiterature)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/professional-literatures');
        }

        $professionalLiterature->update([
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
     * @param  \App\Models\LibraryPdf  $professionalLiterature
     * @return \Illuminate\Http\Response
     */
    public function destroy(LibraryPdf $professionalLiterature)
    {
        $professionalLiterature->delete();
        return redirect(route('admin.library.professional-literature.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $professionalLiteratures = LibraryPdf::where('category', 'professional-literature')->onlyTrashed()->paginate(10);
        $organizingLibraryActivities = LibraryPdf::where('category', 'organizing-library-activity')->onlyTrashed()->paginate(10);

        return view('admin.library.professional-literature.recycleBin', [
            'professionalLiteratures' => $professionalLiteratures,
            'organizingLibraryActivities' => $organizingLibraryActivities,
        ]);
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
