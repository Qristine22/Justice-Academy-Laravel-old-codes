<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextRequest;
use Illuminate\Http\Request;

// Models
use App\Models\RectorsPage;
use App\Models\RectorsDecree;

class RectorsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  RectorsPage::get();
        $decrees = RectorsDecree::orderBy('id', 'DESC')->paginate(5);

        return view('admin.about.rectors-page.index', [
            'data' => $data,
            'decrees' => $decrees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.rectors-page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TextRequest $request)
    {
        RectorsPage::insert([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.about.rectors-page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RectorsPage  $rectorsPage
     * @return \Illuminate\Http\Response
     */
    public function show(RectorsPage $rectorsPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RectorsPage  $rectorsPage
     * @return \Illuminate\Http\Response
     */
    public function edit(RectorsPage $rectorsPage)
    {
        return view('admin.about.rectors-page.edit', [
            'rectorsPage' => $rectorsPage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RectorsPage  $rectorsPage
     * @return \Illuminate\Http\Response
     */
    public function update(TextRequest $request, RectorsPage $rectorsPage)
    {
        $rectorsPage->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.about.rectors-page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RectorsPage  $rectorsPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(RectorsPage $rectorsPage)
    {
        // $rectorsPage->delete();
        // return redirect(route('admin.about.rectors-page.index'));
    }




    // recycle bin
    public function recycleBin()
    {
        $decrees = RectorsDecree::onlyTrashed()->paginate(10);

        return view('admin.about.rectors-page.recycleBin', [
            'decrees' => $decrees,
        ]);
    }
}
