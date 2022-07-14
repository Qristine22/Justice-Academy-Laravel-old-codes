<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextRequest;
use Illuminate\Http\Request;

// Model
use App\Models\Admission;
use App\Models\Candidate;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admission = Admission::all();
        $candidates = Candidate::all();

        return view('admin.about.admission.index', [
            'data' => $admission,
            'candidates' => $candidates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.admission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TextRequest $request)
    {
        Admission::insert([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.about.admission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        return view('admin.about.admission.edit', [
            'admission' => $admission,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(TextRequest $request, Admission $admission)
    {
        $admission->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
        ]);

        return redirect(route('admin.about.admission.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        // $admission->delete();
        // return redirect(route('admin.about.admission.index'));
    }
}
