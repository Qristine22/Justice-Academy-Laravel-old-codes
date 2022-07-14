<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\SitesLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SitesLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = SitesLink::paginate(10);

        return view('admin.contact.sites-link.index', [
            'links' => $links,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.sites-link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required',
        ]);
        $icon = $request->file('icon')->store('contact/site-icons');

        SitesLink::insert([
            'link' => $request->link,
            'icon' => $icon,
        ]);

        return redirect(route('admin.contact.sites-link.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SitesLink  $sitesLink
     * @return \Illuminate\Http\Response
     */
    public function show(SitesLink $sitesLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SitesLink  $sitesLink
     * @return \Illuminate\Http\Response
     */
    public function edit(SitesLink $sitesLink)
    {
        return view('admin.contact.sites-link.edit', [
            'sitesLink' => $sitesLink,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SitesLink  $sitesLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SitesLink $sitesLink)
    {
        $request->validate([
            'icon' => 'required',
        ]);
        $icon = $request->iconHidden;
        
        if(!empty($request->icon)){
            Storage::delete($icon);
            $icon = $request->file('icon')->store('contact/site-icons');
        }
        $sitesLink->update([
            'link' => $request->link,
            'icon' => $icon,
        ]);

        return redirect(route('admin.contact.sites-link.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SitesLink  $sitesLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(SitesLink $sitesLink)
    {
        $sitesLink->delete();
        return redirect(route('admin.contact.sites-link.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $links = SitesLink::onlyTrashed()->paginate(10);

        return view('admin.contact.sites-link.recycleBin', [
            'links' => $links,
        ]);
    }



    public function recycleBinRestore($id)
    {
        SitesLink::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = SitesLink::withTrashed()->findOrFail($id);
        Storage::delete($item->icon);
        $item->forceDelete();

        return redirect()->back();
    }
}
