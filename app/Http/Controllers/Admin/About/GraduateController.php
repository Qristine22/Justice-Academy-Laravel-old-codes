<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\Graduate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\GraduateRequest;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graduates = Graduate::orderBy('id', 'DESC')->paginate(10);

        return view('admin.about.graduate.index', [
            'graduates' => $graduates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.graduate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GraduateRequest $request)
    {
        $request->validate([
            'img' => 'required',
        ]);
        $photo = $request->file('img')->store('about/graduates');

        Graduate::insert([
            'name' => $request->name,
            'info' => $request->info,
            'position' => $request->position,
            'img' => $photo,
            'year' => $request->year,
        ]);

        return redirect(route('admin.about.graduates.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function show(Graduate $graduate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function edit(Graduate $graduate)
    {
        return view('admin.about.graduate.edit', [
            'graduate' => $graduate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function update(GraduateRequest $request, Graduate $graduate)
    {
        $photo = $request->imgHidden;

        if(!empty($request->img)){
            Storage::delete($photo);
            $photo = $request->file('img')->store('about/graduates');
        }

        $graduate->update([
            'name' => $request->name,
            'info' => $request->info,
            'position' => $request->position,
            'img' => $photo,
            'year' => $request->year,
        ]);

        return redirect(route('admin.about.graduates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graduate $graduate)
    {
        $graduate->delete();
        return redirect(route('admin.about.graduates.index'));
    }


    



    // recycle bin
    public function recycleBin()
    {
        $graduates = Graduate::onlyTrashed()->paginate(10);

        return view('admin.about.graduate.recycleBin', [
            'graduates' => $graduates,
        ]);
    }



    public function recycleBinRestore($id)
    {
        Graduate::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {
        $item = Graduate::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->img);
        return redirect()->back();
    }
}
