<?php

namespace App\Http\Controllers\Admin\FullTime;

use Illuminate\Http\Request;
use App\Models\ProvideDeferral;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;

class ProvideDeferralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provideDeferral = ProvideDeferral::paginate(10);

        return view('admin.full-time-education.provide-deferral.index', [
            'provideDeferral' => $provideDeferral,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.full-time-education.provide-deferral.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('full-time-education/provide-deferral');

        ProvideDeferral::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.provide-deferral.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProvideDeferral  $provideDeferral
     * @return \Illuminate\Http\Response
     */
    public function show(ProvideDeferral $provideDeferral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProvideDeferral  $provideDeferral
     * @return \Illuminate\Http\Response
     */
    public function edit(ProvideDeferral $provideDeferral)
    {
        return view('admin.full-time-education.provide-deferral.edit', [
            'provideDeferral' => $provideDeferral,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProvideDeferral  $provideDeferral
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, ProvideDeferral $provideDeferral)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('full-time-education/provide-deferral');
        }

        $provideDeferral->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.provide-deferral.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProvideDeferral  $provideDeferral
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProvideDeferral $provideDeferral)
    {
        $provideDeferral->delete();
        return redirect(route('admin.full-time-education.provide-deferral.index'));
    }
    







    // recycle bin
    public function recycleBin()
    {
        $provideDeferral = ProvideDeferral::onlyTrashed()->paginate(10);

        return view('admin.full-time-education.provide-deferral.recycleBin', [
            'provideDeferral' => $provideDeferral,
        ]);
    }



    public function recycleBinRestore($id)
    {
        ProvideDeferral::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = ProvideDeferral::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();

        return redirect()->back();
    }
}
