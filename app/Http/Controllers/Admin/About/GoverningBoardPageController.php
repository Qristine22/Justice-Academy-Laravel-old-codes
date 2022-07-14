<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextRequest;

// Models
use App\Models\GoverningBoardPage;
use App\Models\GoverningBoardDecree;
use App\Models\GoverningBoardStaff;

class GoverningBoardPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutPage = GoverningBoardPage::get();
        $decrees = GoverningBoardDecree::orderBy('id', 'DESC')->paginate(10, ['*'], 'decrees');
        $staff = GoverningBoardStaff::orderBy('id', 'DESC')->paginate(10, ['*'], 'staff');

        return view('admin.about.governing-board-page.index', [
            'aboutPage' => $aboutPage,
            'decrees' => $decrees,
            'staff' => $staff,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.governing-board-page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TextRequest $request)
    {
        GoverningBoardPage::insert([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.about.governing-board-page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function show(GoverningBoardPage $governingBoardPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function edit(GoverningBoardPage $governingBoardPage)
    {
        return view('admin.about.governing-board-page.edit', [
            'governingBoardPage' => $governingBoardPage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function update(TextRequest $request, GoverningBoardPage $governingBoardPage)
    {
        $governingBoardPage->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.about.governing-board-page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoverningBoardPage $governingBoardPage)
    {
        // $governingBoardPage->delete();
        // return redirect(route('admin.about.governing-board-page.index'));
    }





    // recycle bin
    public function recycleBin()
    {
        $decrees = GoverningBoardDecree::onlyTrashed()->paginate(10, ['*'], 'decrees');
        $staff = GoverningBoardStaff::onlyTrashed()->paginate(10, ['*'], 'staff');

        return view('admin.about.governing-board-page.recycleBin', [
            'decrees' => $decrees,
            'staff' => $staff,
        ]);
    }
}
