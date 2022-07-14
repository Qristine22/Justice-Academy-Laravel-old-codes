<?php

namespace App\Http\Controllers\Admin\FullTime;

use Illuminate\Http\Request;
use App\Models\DormitoryRule;
use App\Http\Requests\NameRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\NamePdfRequest;
use Illuminate\Support\Facades\Storage;

class DormitoryRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dormitoryRule = DormitoryRule::paginate(10);

        return view('admin.full-time-education.dormitory-rule.index', [
            'dormitoryRule' => $dormitoryRule,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.full-time-education.dormitory-rule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NamePdfRequest $request)
    {
        $pdf = $request->file('pdf')->store('full-time-education/dormitory-rules');

        DormitoryRule::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.dormitory-rule.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DormitoryRule  $dormitoryRule
     * @return \Illuminate\Http\Response
     */
    public function show(DormitoryRule $dormitoryRule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DormitoryRule  $dormitoryRule
     * @return \Illuminate\Http\Response
     */
    public function edit(DormitoryRule $dormitoryRule)
    {
        return view('admin.full-time-education.dormitory-rule.edit', [
            'dormitoryRule' => $dormitoryRule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DormitoryRule  $dormitoryRule
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, DormitoryRule $dormitoryRule)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('full-time-education/dormitory-rules');
        }

        $dormitoryRule->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.full-time-education.dormitory-rule.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DormitoryRule  $dormitoryRule
     * @return \Illuminate\Http\Response
     */
    public function destroy(DormitoryRule $dormitoryRule)
    {
        $dormitoryRule->delete();
        return redirect(route('admin.full-time-education.dormitory-rule.index'));
    }
    







    // recycle bin
    public function recycleBin()
    {
        $dormitoryRule = DormitoryRule::onlyTrashed()->paginate(10);

        return view('admin.full-time-education.dormitory-rule.recycleBin', [
            'dormitoryRule' => $dormitoryRule,
        ]);
    }



    public function recycleBinRestore($id)
    {
        DormitoryRule::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = DormitoryRule::withTrashed()->findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();

        return redirect()->back();
    }
}
