<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\ContactStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StaffRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactStaff = ContactStaff::orderBy('id', 'DESC')->paginate(10);

        return view('admin.contact.staff.index', [
            'contactStaff' => $contactStaff,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        ContactStaff::insert([
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'phone' => $request->phone,
            'mail' => $request->mail,
        ]);

        return redirect(route('admin.contact.staff.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactStaff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(ContactStaff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactStaff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactStaff $staff)
    {
        return view('admin.contact.staff.edit', [
            'staff' => $staff,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactStaff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, ContactStaff $staff)
    {
        $staff->update([
            'position_en' => $request->position_en,
            'position_am' => $request->position_am,
            'position_ru' => $request->position_ru,
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'phone' => $request->phone,
            'mail' => $request->mail,
        ]);

        return redirect(route('admin.contact.staff.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactStaff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactStaff $staff)
    {
        $staff->delete();
        return redirect(route('admin.contact.staff.index'));
    }







    // recycle bin
    public function recycleBin()
    {
        $contactStaff = ContactStaff::onlyTrashed()->paginate(10);

        return view('admin.contact.staff.recycleBin', [
            'contactStaff' => $contactStaff,
        ]);
    }



    public function recycleBinRestore($id)
    {
        ContactStaff::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {        
        $item = ContactStaff::withTrashed()->findOrFail($id);
        $item->forceDelete();

        return redirect()->back();
    }
}
