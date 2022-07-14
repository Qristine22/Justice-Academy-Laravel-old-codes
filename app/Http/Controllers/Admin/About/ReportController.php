<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\ReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::orderBy('id', 'DESC')->paginate(10);

        return view('admin.about.report.index', [
            'reports' => $reports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $request->validate([
            'pdf' => 'required',
        ]);

        $pdf = $request->file('pdf')->store('about/reports');

        Report::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'year' => $request->year,
        ]);

        return redirect(route('admin.about.report.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('admin.about.report.edit', [
            'report' => $report,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, Report $report)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('about/reports');
        }
        $report->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'year' => $request->year,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.about.report.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect(route('admin.about.report.index'));
    }

    



    // recycle bin
    public function recycleBin()
    {
        $reports = Report::onlyTrashed()->paginate(10);

        return view('admin.about.report.recycleBin', [
            'reports' => $reports,
        ]);
    }





    public function recycleBinRestore($id)
    {
        Report::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {
        $item = Report::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->pdf);
        return redirect()->back();
    }
}
