<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\PageRequest;
use App\Models\ContactPage;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactPage = ContactPage::get();

        return view('admin.contact.page.index', [
            'contactPage' => $contactPage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        ContactPage::insert([
            'address_en' => $request->address_en,
            'address_am' => $request->address_am,
            'address_ru' => $request->address_ru,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'map' => $request->map,
        ]);

        return redirect(route('admin.contact.page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactPage  $page
     * @return \Illuminate\Http\Response
     */
    public function show(ContactPage $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPage  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $page)
    {
        return view('admin.contact.page.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactPage  $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, ContactPage $page)
    {
        $page->update([
            'address_en' => $request->address_en,
            'address_am' => $request->address_am,
            'address_ru' => $request->address_ru,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'map' => $request->map,
        ]);

        return redirect(route('admin.contact.page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactPage  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPage $page)
    {
        $page->delete();
        return redirect(route('admin.contact.page.index'));
    }
}
