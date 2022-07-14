<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\MassMediaRequest;

// Models
use App\Models\MassMedium;
use App\Models\MassMediaLink;

class MassMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massMedia = MassMedium::orderBy('id', 'DESC')->paginate(10);
        return view('admin.about.mass-media.index', [
            'massMedia' => $massMedia,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.mass-media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MassMediaRequest $request)
    {
        $massMedia = MassMedium::insertGetId([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'year' => $request->year,
        ]);

        if (!empty($request->siteNames) && !empty($request->linkNames) && !empty($request->links)) {
            foreach ($request->siteNames as $index => $siteName) {
                if(isset($request->siteNames[$index]) && isset($request->linkNames[$index])){
                    MassMediaLink::insert([
                        'mass_media_id' => $massMedia,
                        'site_name' => $siteName,
                        'link_name' => $request->linkNames[$index],
                        'link' => $request->links[$index],
                    ]);
                }
            }
        }

        return redirect(route('admin.about.mass-media.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MassMedium  $massMedium
     * @return \Illuminate\Http\Response
     */
    public function show(MassMedium $massMedium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MassMedium  $massMedium
     * @return \Illuminate\Http\Response
     */
    public function edit(MassMedium $massMedium)
    {
        return view('admin.about.mass-media.edit', [
            'massMedia' => $massMedium,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MassMedium  $massMedium
     * @return \Illuminate\Http\Response
     */
    public function update(MassMediaRequest $request, MassMedium $massMedium)
    {
        $massMedium->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'year' => $request->year,
        ]);

        if (!empty($request->siteNames) && !empty($request->linkNames) && !empty($request->links)) {
            foreach ($request->siteNames as $index => $siteName) {
                if(isset($request->siteNames[$index]) && isset($request->linkNames[$index])){
                    MassMediaLink::insert([
                        'mass_media_id' => $massMedium->id,
                        'site_name' => $siteName,
                        'link_name' => $request->linkNames[$index],
                        'link' => $request->links[$index],
                    ]);
                }
            }
        }
        return redirect(route('admin.about.mass-media.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MassMedium  $massMedium
     * @return \Illuminate\Http\Response
     */
    public function destroy(MassMedium $massMedium)
    {
        $massMedium->delete();
        return redirect(route('admin.about.mass-media.index'));
    }






    public function linkDelete($id){
        $link = MassMediaLink::findOrFail($id);
        $link->forceDelete();
        return redirect()->back();
    }








    // recycle bin
    public function recycleBin()
    {
        $massMedia = MassMedium::onlyTrashed()->paginate(10);

        return view('admin.about.mass-media.recycleBin', [
            'massMedia' => $massMedia,
        ]);
    }



    public function recycleBinRestore($id)
    {
        MassMedium::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }


    public function forceDelete($id)
    {
        $massMediaLinks = MassMediaLink::where('mass_media_id', $id)->get();
        foreach($massMediaLinks as $link){
            $link->forceDelete();
        }

        $item = MassMedium::withTrashed()->findOrFail($id);
        $item->forceDelete();
        return redirect()->back();
    }
}
