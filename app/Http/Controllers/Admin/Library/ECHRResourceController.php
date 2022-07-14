<?php

namespace App\Http\Controllers\Admin\Library;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Library\BookRequest;

// Models
use App\Models\Library;
use App\Models\EchrLink;

class ECHRResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $echrResources = Library::where('category', 'ECHR-resource')->orderBy('id', 'DESC')->paginate(10, ['*'], 'echrResources');
        $echrLinks = EchrLink::orderBy('id', 'DESC')->paginate(10, ['*'], 'echrLinks');

        return view('admin.library.echr-resource.index', [
            'echrResources' => $echrResources,
            'echrLinks' => $echrLinks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.echr-resource.create');
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

        $pdf = $request->file('pdf')->store('library/ECHR-resources');
        $img = null;
        if(!empty($request->img)){
            $img = $request->file('img')->store('library/ECHR-resources');
        }

        Library::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
            'category' => 'ECHR-resource',
        ]);

        return redirect(route('admin.library.echr-resource.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $echrResources
     * @return \Illuminate\Http\Response
     */
    public function show(Library $echrResources)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $echrResource
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $echrResource)
    {
        return view('admin.library.echr-resource.edit', [
            'echrResource' => $echrResource,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $echrResource
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Library $echrResource)
    {
        $pdf = $request->pdfHidden;
        $img = $request->imgHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/ECHR-resources');
        }
        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('library/ECHR-resources');
        }

        $echrResource->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.library.echr-resource.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $echrResource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $echrResource)
    {
        $echrResource->delete();
        return redirect(route('admin.library.echr-resource.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $echrResources = Library::where('category', 'ECHR-resource')->onlyTrashed()->paginate(10, ['*'], 'echrResources');
        $echrLinks = EchrLink::onlyTrashed()->paginate(10, ['*'], 'echrLinks');

        return view('admin.library.ECHR-resource.recycleBin', [
            'echrResources' => $echrResources,
            'echrLinks' => $echrLinks,
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
