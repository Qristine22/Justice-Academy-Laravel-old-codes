<?php

namespace App\Http\Controllers\Admin\Library;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Library\BookRequest;

class AcademyPublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academyPublications = Library::where('category', 'academy-publication')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.library.academy-publication.index', [
            'title' => 'Արդարադատության ակադեմիայի հրատարակություններ',
            'books' => $academyPublications,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.academy-publication.create', [
            'title' => 'Արդարադատության ակադեմիայի հրատարակություններ',
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

        $pdf = $request->file('pdf')->store('library/academy-publications');
        $img = null;
        if(!empty($request->img)){
            $img = $request->file('img')->store('library/academy-publications');
        }

        Library::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
            'category' => 'academy-publication',
        ]);

        return redirect(route('admin.library.academy-publication.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function show(Library $academyPublication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $academyPublication)
    {
        return view('admin.library.academy-publication.edit', [
            'title' => 'Արդարադատության ակադեմիայի հրատարակություններ',
            'library' => $academyPublication,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Library $academyPublication)
    {
        $pdf = $request->pdfHidden;
        $img = $request->imgHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/academy-publications');
        }
        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('library/academy-publications');
        }

        $academyPublication->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.library.academy-publication.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $academyPublication)
    {
        $academyPublication->delete();
        return redirect(route('admin.library.academy-publication.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $books = Library::where('category', 'academy-publication')->onlyTrashed()->paginate(10);

        return view('admin.library.academy-publication.recycleBin', [
            'title' => 'Արդարադատության ակադեմիայի հրատարակություններ',
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
