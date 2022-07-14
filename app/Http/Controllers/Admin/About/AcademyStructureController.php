<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\NameRequest;
use Illuminate\Http\Request;

// Models
use App\Models\AcademyStructure;
use App\Models\Worker;

class AcademyStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AcademyStructure::paginate(5, ['*'], 'academyStructure');
        $workers = Worker::workers();
        return view('admin.about.academy-structure.index', [
            'data' => $data,
            'workers' => $workers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.academy-structure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request)
    {
        AcademyStructure::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
        ]);
        
        return redirect(route('admin.about.academy-structure.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademyStructure  $academyStructure
     * @return \Illuminate\Http\Response
     */
    public function show(AcademyStructure $academyStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademyStructure  $academyStructure
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademyStructure $academyStructure)
    {
        return view('admin.about.academy-structure.edit', [
            'academyStructure' => $academyStructure,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademyStructure  $academyStructure
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, AcademyStructure $academyStructure)
    {
        $academyStructure->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
        ]);

        return redirect(route('admin.about.academy-structure.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademyStructure  $academyStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademyStructure $academyStructure)
    {
        //
    }
}
