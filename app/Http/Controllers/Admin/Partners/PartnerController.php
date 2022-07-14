<?php

namespace App\Http\Controllers\Admin\Partners;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Partners\PartnerRequest;
use App\Http\Requests\Partners\PartnerUpdateRequest;

// Models
use App\Models\Partner;
use App\Models\PartnersLink;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::orderBy('id', 'DESC')->paginate(10);

        return view('admin.partners.partner.index', [
            'partners' => $partners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        $logo = $request->file('logo')->store('partners/' . $request->category);

        $partner = Partner::insertGetId([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'description_en' => $request->description_en,
            'description_am' => $request->description_am,
            'description_ru' => $request->description_ru,
            'logo' => $logo,
            'category' => $request->category,
        ]);


        if (!empty($request->links)) {
            foreach ($request->links as $index => $link) {
                if (isset($request->enNames[$index]) && isset($request->amNames[$index]) && isset($request->ruNames[$index])
                && (isset($link) || isset($request->pdfs[$index]))) {
                    $pdf = null;
                    if (!empty($request->pdfs[$index])) {
                        $pdf = $request->pdfs[$index]->store('partners/links');
                    }

                    PartnersLink::insert([
                        'name_en' => $request->enNames[$index],
                        'name_am' => $request->amNames[$index],
                        'name_ru' => $request->ruNames[$index],
                        'partner_id' => $partner,
                        'link' => $link,
                        'file' => $pdf,
                    ]);
                }
            }
        }

        return redirect(route('admin.partners.partner.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.partners.partner.edit', [
            'partner' => $partner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerUpdateRequest $request, Partner $partner)
    {
        $logo = $request->logoHidden;

        if (!empty($request->logo)) {
            Storage::delete($logo);
            $logo = $request->file('logo')->store('partners/' . $request->category);
        }

        $partner->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'description_en' => $request->description_en,
            'description_am' => $request->description_am,
            'description_ru' => $request->description_ru,
            'logo' => $logo,
            'category' => $request->category,
        ]);

        if (!empty($request->links)) {
            foreach ($request->links as $index => $link) {
                if (isset($request->enNames[$index]) && isset($request->amNames[$index]) && isset($request->ruNames[$index])
                    && (isset($link) || isset($request->pdfs[$index]))) {
                    $pdf = null;
                    if (!empty($request->pdfs[$index])) {
                        $pdf = $request->pdfs[$index]->store('partners/links');
                    }
                    
                    PartnersLink::insert([
                        'name_en' => $request->enNames[$index],
                        'name_am' => $request->amNames[$index],
                        'name_ru' => $request->ruNames[$index],
                        'link' => $link,
                        'file' => $pdf,
                        'partner_id' => $partner->id,
                    ]);
                }
            }
        }

        return redirect(route('admin.partners.partner.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect(route('admin.partners.partner.index'));
    }





    public function linkDelete($id)
    {
        $link = PartnersLink::findOrFail($id);
        $link->forceDelete();
        Storage::delete($link->file);
        return redirect()->back();
    }










    // recycle bin
    public function recycleBin()
    {
        $partners = Partner::onlyTrashed()->paginate(10);

        return view('admin.partners.partner.recycleBin', [
            'partners' => $partners,
        ]);
    }



    public function recycleBinRestore($id)
    {
        Partner::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {
        $partnerLinks = PartnersLink::where('partner_id', $id)->get();
        foreach ($partnerLinks as $item) {
            $item->forceDelete();
            Storage::delete($item->file);
        }
        
        $item = Partner::withTrashed()->findOrFail($id);
        Storage::delete($item->logo);
        $item->forceDelete();
        return redirect()->back();
    }
}
