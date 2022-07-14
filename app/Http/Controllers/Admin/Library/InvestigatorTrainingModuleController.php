<?php

namespace App\Http\Controllers\Admin\Library;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InvestigatorTrainingModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigatorTrainingModules = Library::where('category', 'investigator-training-module')->orderBy('id', 'DESC')
        ->paginate(10);

        return view('admin.library.investigator-training-module.index', [
            'title' => 'Անչափահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ',
            'books' => $investigatorTrainingModules,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.investigator-training-module.create', [
            'title' => 'Անչափահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required',
        ]);

        $pdf = $request->file('pdf')->store('library/investigator-training-modules');
        $img = null;
        if(!empty($request->img)){
            $img = $request->file('img')->store('library/investigator-training-modules');
        }

        Library::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
            'category' => 'investigator-training-module',
        ]);

        return redirect(route('admin.library.investigator-training-module.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $investigatorTrainingModule
     * @return \Illuminate\Http\Response
     */
    public function show(Library $investigatorTrainingModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $investigatorTrainingModule
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $investigatorTrainingModule)
    {
        return view('admin.library.investigator-training-module.edit', [
            'title' => 'Անչափահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ',
            'investigatorTrainingModule' => $investigatorTrainingModule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $investigatorTrainingModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $investigatorTrainingModule)
    {
        $pdf = $request->pdfHidden;
        $img = $request->imgHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/investigator-training-modules');
        }
        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('library/investigator-training-modules');
        }

        $investigatorTrainingModule->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.library.investigator-training-module.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $investigatorTrainingModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $investigatorTrainingModule)
    {
        $investigatorTrainingModule->delete();

        return redirect(route('admin.library.investigator-training-module.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $books = Library::where('category', 'investigator-training-module')->onlyTrashed()->paginate(10);

        return view('admin.library.investigator-training-module.recycleBin', [
            'title' => 'Անչափահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ',
            'books' => $books,
        ]);
    }



    public function recycleBinRestore($id)
    {
        Library::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = Library::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        Storage::delete($item->img);
        $item->forceDelete();

        return redirect()->back();
    }
}
