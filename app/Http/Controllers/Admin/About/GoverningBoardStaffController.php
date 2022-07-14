<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\GoverningBoardStaffRequest;

// Models
use App\Models\GoverningBoardStaff;

class GoverningBoardStaffController extends Controller
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
        return view('admin.about.governing-board-staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoverningBoardStaffRequest $request)
    {
        $request->validate([
            'img' => 'required',
        ]);

        $photo = $request->file('img')->store('about/governing-board-staff');

        GoverningBoardStaff::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'biography' => $request->biography,
            'img' => $photo,
        ]);

        return redirect(route('admin.about.governing-board-page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoverningBoardStaff  $governingBoardStaff
     * @return \Illuminate\Http\Response
     */
    public function show(GoverningBoardStaff $governingBoardStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoverningBoardStaff  $governingBoardStaff
     * @return \Illuminate\Http\Response
     */
    public function edit(GoverningBoardStaff $governingBoardStaff)
    {
        return view('admin.about.governing-board-staff.edit', [
            'governingBoardStaff' => $governingBoardStaff
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoverningBoardStaff  $governingBoardStaff
     * @return \Illuminate\Http\Response
     */
    public function update(GoverningBoardStaffRequest $request, GoverningBoardStaff $governingBoardStaff)
    {
        $photo = $request->imgHidden;

        if(!empty($request->img)){
            Storage::delete($photo);
            $photo = $request->file('img')->store('about/governing-board-staff');
        }

        $governingBoardStaff->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'biography' => $request->biography,
            'img' => $photo,
        ]);

        return redirect(route('admin.about.governing-board-page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoverningBoardStaff  $governingBoardStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoverningBoardStaff $governingBoardStaff)
    {
        $governingBoardStaff->delete();
        return redirect(route('admin.about.governing-board-page.index'));
    }
    


    


    public function recycleBinRestore($id)
    {
        GoverningBoardStaff::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }


    public function forceDelete($id)
    {
        $item = GoverningBoardStaff::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->img);
        return redirect()->back();
    }
}
