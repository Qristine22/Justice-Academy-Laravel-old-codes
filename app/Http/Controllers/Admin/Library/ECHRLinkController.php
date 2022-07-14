<?php

namespace App\Http\Controllers\Admin\Library;

use App\Models\EchrLink;
use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;

class ECHRLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.ECHR-link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request)
    {
        $request->validate([
            'link' => 'required|max:255',
        ]);

        EchrLink::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
        ]);

        return redirect(route('admin.library.echr-resource.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EchrLink  $echrLink
     * @return \Illuminate\Http\Response
     */
    public function show(EchrLink $echrLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EchrLink  $echrLink
     * @return \Illuminate\Http\Response
     */
    public function edit(EchrLink $echrLink)
    {
        return view('admin.library.ECHR-link.edit', [
            'echrLink' => $echrLink,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EchrLink  $echrLink
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, EchrLink $echrLink)
    {
        $request->validate([
            'link' => 'required|max:255',
        ]);

        $echrLink->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
        ]);
        return redirect(route('admin.library.echr-resource.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EchrLink  $echrLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(EchrLink $echrLink)
    {
        $echrLink->delete();
        return redirect(route('admin.library.echr-resource.index'));
    }





    public function recycleBinRestore($id)
    {
        EchrLink::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = EchrLink::withTrashed()->findOrFail($id);
        $item->forceDelete();

        return redirect()->back();
    }
}
