<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Models\BulletinInfo;
use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletinInfo = BulletinInfo::orderBy('id', 'DESC')->paginate(10);

        return view('admin.bulletin.info.index', [
            'bulletinInfo' => $bulletinInfo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bulletin.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('bulletin/info');

        BulletinInfo::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.bulletin.info.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BulletinInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function show(BulletinInfo $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BulletinInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(BulletinInfo $info)
    {
        return view('admin.bulletin.info.edit', [
            'info' => $info,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BulletinInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, BulletinInfo $info)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('bulletin/info');
        }

        $info->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.bulletin.info.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BulletinInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(BulletinInfo $info)
    {
        $info->delete();

        return redirect(route('admin.bulletin.info.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $bulletinInfo = BulletinInfo::onlyTrashed()->paginate(10);

        return view('admin.bulletin.info.recycleBin', [
            'bulletinInfo' => $bulletinInfo,
        ]);
    }



    public function recycleBinRestore($id)
    {
        BulletinInfo::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = BulletinInfo::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        Storage::delete($item->img);
        $item->forceDelete();

        return redirect()->back();
    }
}
