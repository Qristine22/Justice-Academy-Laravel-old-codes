<?php

namespace App\Http\Controllers\Admin\Library;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Library\BookRequest;
use Illuminate\Support\Facades\Storage;

class TrainingMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainingManuals = Library::where('category', 'training-material')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.library.training-material.index', [
            'title' => 'Ուսումնաօժանդակ նյութեր',
            'books' => $trainingManuals,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.training-material.create', [
            'title' => 'Ուսումնաօժանդակ նյութեր',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $request->validate([
            'pdf' => 'required',
        ]);

        $pdf = $request->file('pdf')->store('library/training-materials');
        $img = null;
        if(!empty($request->img)){
            $img = $request->file('img')->store('library/training-materials');
        }

        Library::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
            'category' => 'training-material',
        ]);

        return redirect(route('admin.library.training-material.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $trainingMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(Library $trainingMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $trainingMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $trainingMaterial)
    {
        return view('admin.library.training-material.edit', [
            'title' => 'Ուսումնաօժանդակ նյութեր',
            'trainingMaterial' => $trainingMaterial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $trainingMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Library $trainingMaterial)
    {
        $pdf = $request->pdfHidden;
        $img = $request->imgHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/training-materials');
        }
        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('library/training-materials');
        }

        $trainingMaterial->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.library.training-material.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $trainingMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $trainingMaterial)
    {
        $trainingMaterial->delete();
        return redirect(route('admin.library.training-material.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $books = Library::where('category', 'training-material')->onlyTrashed()->paginate(10);

        return view('admin.library.training-material.recycleBin', [
            'title' => 'Ուսումնաօժանդակ նյութեր',
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
