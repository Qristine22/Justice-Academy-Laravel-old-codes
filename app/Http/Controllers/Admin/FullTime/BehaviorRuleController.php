<?php

namespace App\Http\Controllers\Admin\FullTime;

use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\BehaviorRule;

class BehaviorRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $behaviorRule = BehaviorRule::paginate(10);

        return view('admin.full-time-education.behavior-rule.index', [
            'behaviorRule' => $behaviorRule,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.full-time-education.behavior-rule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('full-time-education/behavior-rules');

        BehaviorRule::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.behavior-rule.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BehaviorRule  $behaviorRule
     * @return \Illuminate\Http\Response
     */
    public function show(BehaviorRule $behaviorRule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BehaviorRule  $behaviorRule
     * @return \Illuminate\Http\Response
     */
    public function edit(BehaviorRule $behaviorRule)
    {
        return view('admin.full-time-education.behavior-rule.edit', [
            'behaviorRule' => $behaviorRule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BehaviorRule  $behaviorRule
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, BehaviorRule $behaviorRule)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('full-time-education/behavior-rules');
        }

        $behaviorRule->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.behavior-rule.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BehaviorRule  $behaviorRule
     * @return \Illuminate\Http\Response
     */
    public function destroy(BehaviorRule $behaviorRule)
    {
        $behaviorRule->delete();
        return redirect(route('admin.full-time-education.behavior-rule.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $behaviorRule = BehaviorRule::onlyTrashed()->paginate(10);

        return view('admin.full-time-education.behavior-rule.recycleBin', [
            'behaviorRule' => $behaviorRule,
        ]);
    }



    public function recycleBinRestore($id)
    {
        BehaviorRule::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = BehaviorRule::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();

        return redirect()->back();
    }
}
