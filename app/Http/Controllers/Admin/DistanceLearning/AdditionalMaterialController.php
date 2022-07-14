<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DistanceLearningCourse;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\DistanceLearningAdditionalMaterial;
use App\Models\DistanceLearningAdditionalMaterialLink;
use App\Http\Requests\DistanceLearning\AdditionalMaterialRequest;

class AdditionalMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $additionalMaterials = DistanceLearningAdditionalMaterial::paginate(10);

        return view('admin.distance-learning.additional-material.index', [
            'additionalMaterials' => $additionalMaterials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DistanceLearningCourse::all();

        return view('admin.distance-learning.additional-material.create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdditionalMaterialRequest $request)
    {
        $additionalMaterial = DistanceLearningAdditionalMaterial::insertGetId([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'course_id' => $request->course_id,
        ]);

        if (!empty($request->links) || !empty($request->linkNames) || !empty($request->pdfs)) {
            foreach ($request->links as $index => $link) {
                if (isset($link) && isset($request->linkNames[$index])) {
                    $pdf = null;
                    if(!empty($request->pdfs[$index])){
                        $pdf = $request->pdfs[$index]->store('distance-learning/additional-materials');
                    }
                    DistanceLearningAdditionalMaterialLink::insert([
                        'link' => $link,
                        'link_name' => $request->linkNames[$index],
                        'pdf' => $pdf,
                        'additional_material_id' => $additionalMaterial,
                    ]);
                }
            }
        }

        return redirect(route('admin.distance-learning.additional-material.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearningAdditionalMaterial  $additionalMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearningAdditionalMaterial $additionalMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearningAdditionalMaterial  $additionalMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearningAdditionalMaterial $additionalMaterial)
    {
        $courses = DistanceLearningCourse::all();

        return view('admin.distance-learning.additional-material.edit', [
            'additionalMaterial' => $additionalMaterial,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearningAdditionalMaterial  $additionalMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(AdditionalMaterialRequest $request, DistanceLearningAdditionalMaterial $additionalMaterial)
    {
        $additionalMaterial->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'course_id' => $request->course_id,
        ]);

        if (!empty($request->links) || !empty($request->linkNames) || !empty($request->pdfs)) {
            foreach ($request->links as $index => $link) {
                if (isset($link) && isset($request->linkNames[$index])) {
                    $pdf = null;
                    if(!empty($request->pdfs[$index])){
                        $pdf = $request->pdfs[$index]->store('distance-learning/additional-materials');
                    }
                    DistanceLearningAdditionalMaterialLink::insert([
                        'link' => $link,
                        'link_name' => $request->linkNames[$index],
                        'pdf' => $pdf,
                        'additional_material_id' => $additionalMaterial->id,
                    ]);
                }
            }
        }

        return redirect(route('admin.distance-learning.additional-material.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearningAdditionalMaterial  $additionalMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearningAdditionalMaterial $additionalMaterial)
    {
        $additionalMaterial->delete();
        return redirect(route('admin.distance-learning.additional-material.index'));
    }




    public function additionalMaterialLinkDelete($id){
        $link = DistanceLearningAdditionalMaterialLink::findOrFail($id);
        Storage::delete($link->pdf);
        $link->forceDelete();
        return redirect()->back();
    }









    // recycle bin
    public function recycleBin()
    {
        $additionalMaterials = DistanceLearningAdditionalMaterial::onlyTrashed()->paginate(10);

        return view('admin.distance-learning.additional-material.recycleBin', [
            'additionalMaterials' => $additionalMaterials,
        ]);
    }



    public function recycleBinRestore($id)
    {
        DistanceLearningAdditionalMaterial::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = DistanceLearningAdditionalMaterial::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->pdf);

        $links = DistanceLearningAdditionalMaterialLink::where('additional_material_id', $id)->get();
        foreach($links as $link){
            $link->forceDelete();
            Storage::delete($link->pdf);
        }

        return redirect()->back();
    }
}
