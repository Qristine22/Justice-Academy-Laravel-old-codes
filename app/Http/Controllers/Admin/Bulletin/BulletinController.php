<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Models\Bulletin;
use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;


class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletins = Bulletin::paginate(10);

        return view('admin.bulletin.bulletin.index', [
            'bulletins' => $bulletins,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bulletin.bulletin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $request->validate([
            'img' => 'required',
        ]);

        $pdf = $request->file('pdf')->store('bulletin/bulletin');
        $img = $request->file('img')->store('bulletin/bulletin');

        Bulletin::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
        ]);

        return redirect(route('admin.bulletin.bulletin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function show(Bulletin $bulletin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function edit(Bulletin $bulletin)
    {
        return view('admin.bulletin.bulletin.edit', [
            'bulletin' => $bulletin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, Bulletin $bulletin)
    {
        $img = $request->imgHidden;
        $pdf = $request->pdfHidden;

        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('bulletin/bulletin');
        }
        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('bulletin/bulletin');
        }

        $bulletin->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.bulletin.bulletin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bulletin $bulletin)
    {
        $bulletin->delete();
        return redirect(route('admin.bulletin.bulletin.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $bulletin = Bulletin::onlyTrashed()->paginate(10);

        return view('admin.bulletin.bulletin.recycleBin', [
            'bulletin' => $bulletin,
        ]);
    }



    public function recycleBinRestore($id)
    {
        Bulletin::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = Bulletin::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        Storage::delete($item->img);
        $item->forceDelete();

        return redirect()->back();
    }
}
