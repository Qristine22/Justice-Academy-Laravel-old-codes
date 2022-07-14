<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\WorkersRequest;

// Models
use App\Models\Worker;
use App\Models\WorkersImg;

class WorkersController extends Controller
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
        return view('admin.about.workers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkersRequest $request)
    {
        $worker = Worker::insertGetId([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'biography_en' => $request->biography_en,
            'biography_am' => $request->biography_am,
            'biography_ru' => $request->biography_ru,
        ]);


        if (!empty($request->imgs)) {
            foreach ($request->imgs as $img) {
                $imgPath = $img->store('about/workers');
                WorkersImg::insert([
                    'worker_id' => $worker,
                    'img' => $imgPath,
                ]);
            }
        }

        return redirect(route('admin.about.academy-structure.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        return view('admin.about.workers.edit', [
            'worker' => $worker,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(WorkersRequest $request, Worker $worker)
    {
        $worker->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'biography_en' => $request->biography_en,
            'biography_am' => $request->biography_am,
            'biography_ru' => $request->biography_ru,
        ]);


        if (!empty($request->imgs)) {
            foreach ($request->imgs as $img) {
                $imgPath = $img->store('about/workers');
                WorkersImg::insert([
                    'worker_id' => $worker->id,
                    'img' => $imgPath,
                ]);
            }
        }
        return redirect(route('admin.about.academy-structure.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        //
    }



    

    
    // edit page deleting img
    public function imgDelete($id){
        $item = WorkersImg::findOrFail($id);
        Storage::delete($item->img);
        $item->forceDelete();
        return redirect()->back();
    }
}
