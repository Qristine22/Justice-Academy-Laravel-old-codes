<?php

namespace App\Http\Controllers\Admin;

use App\Models\Header;
use App\Models\Subheader;
use Illuminate\Http\Request;

// Models
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;

class SubheaderController extends Controller
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
        $parentHeaders = Header::all();

        return view('admin.subheader.create', [
            'parentHeaders' => $parentHeaders,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request)
    {
        Subheader::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
            'parent_id' => $request->parent_id,
        ]);

        return redirect(route('admin.header.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subheader  $subheader
     * @return \Illuminate\Http\Response
     */
    public function show(Subheader $subheader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subheader  $subheader
     * @return \Illuminate\Http\Response
     */
    public function edit(Subheader $subheader)
    {
        $parentHeaders = Header::all();

        return view('admin.subheader.edit', [
            'subheader' => $subheader,
            'parentHeaders' => $parentHeaders,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subheader  $subheader
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, Subheader $subheader)
    {
        $subheader->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
            'parent_id' => $request->parent_id,
        ]);

        return redirect(route('admin.header.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subheader  $subheader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subheader $subheader)
    {
        $subheader->delete();
        return redirect(route('admin.header.index'));
    }
    

    
    public function recycleBinRestore($id){
        Subheader::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }


    public function forceDelete($id){
        Subheader::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }
}
