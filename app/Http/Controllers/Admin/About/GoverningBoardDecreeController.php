<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\About\GoverningBoardDecreeRequest;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\GoverningBoardDecree;

class GoverningBoardDecreeController extends Controller
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
        return view('admin.about.governing-board-decree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoverningBoardDecreeRequest $request)
    {
        $request->validate([
            'pdf' => 'required',
        ]);
        $pdf = $request->file('pdf')->store('about/governing-board-decrees');

        GoverningBoardDecree::insert([
            'pdf_name' => $request->file_name,
            'info_en' => $request->info_en,
            'info_am' => $request->info_am,
            'info_ru' => $request->info_ru,
            'year' => $request->year,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.about.governing-board-page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function show(GoverningBoardDecree $governingBoardDecree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function edit(GoverningBoardDecree $governingBoardDecree)
    {
        return view('admin.about.governing-board-decree.edit', [
            'governingBoardDecree' => $governingBoardDecree,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function update(GoverningBoardDecreeRequest $request, GoverningBoardDecree $governingBoardDecree)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('about/governing-board-decrees');
        }

        $governingBoardDecree->update([
            'pdf_name' => $request->file_name,
            'info_en' => $request->info_en,
            'info_am' => $request->info_am,
            'info_ru' => $request->info_ru,
            'year' => $request->year,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.about.governing-board-page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoverningBoardDecree $governingBoardDecree)
    {
        $governingBoardDecree->delete();
        return redirect(route('admin.about.governing-board-page.index'));
    }



    


    public function recycleBinRestore($id)
    {
        GoverningBoardDecree::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }


    public function forceDelete($id)
    {
        $item = GoverningBoardDecree::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->pdf);
        return redirect()->back();
    }
}
