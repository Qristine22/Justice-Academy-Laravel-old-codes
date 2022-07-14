<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRequest;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Home::get();
        return view('admin.home.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeRequest $request)
    {
        $request->validate([
            'logo' => 'required',
            'bg' => 'required',
            'rectors_img' => 'required',
            'rectors_signature' => 'required',
        ]);

        $logo = $request->file('logo')->store('home');
        $bg = $request->file('bg')->store('home');
        $rectorsPhoto = $request->file('rectors_img')->store('home');
        $rectorsSignature = $request->file('rectors_signature')->store('home');

        Home::insert([
            'logo' => $logo,
            'bg' => $bg,
            'rectors_img' => $rectorsPhoto,
            'rectors_signature' => $rectorsSignature,
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'rectors_word_en' => $request->rectors_word_en,
            'rectors_word_am' => $request->rectors_word_am,
            'rectors_word_ru' => $request->rectors_word_ru,
        ]);

        return redirect(route('admin.home.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        return view('admin.home.edit', [
            'home' => $home
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(HomeRequest $request, Home $home)
    {
        $logo = $request->logoHidden;
        $bg = $request->bgHidden;
        $signature = $request->signatureHidden;
        $rectorImg = $request->rectorImgHidden;

        if(!empty($request->logo)){
            Storage::delete($logo);
            $logo = $request->file('logo')->store('home');
        }
        if(!empty($request->bg)){
            Storage::delete($bg);
            $bg = $request->file('bg')->store('home');
        }
        if(!empty($request->rectors_signature)){
            Storage::delete($signature);
            $signature = $request->file('rectors_signature')->store('home');
        }
        if(!empty($request->rectors_img)){
            Storage::delete($rectorImg);
            $rectorImg = $request->file('rectors_img')->store('home');
        }

        $home->update([
            'logo' => $logo,
            'bg' => $bg,
            'rectors_signature' => $signature,
            'rectors_img' => $rectorImg,
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'rectors_word_en' => $request->rectors_word_en,
            'rectors_word_am' => $request->rectors_word_am,
            'rectors_word_ru' => $request->rectors_word_ru,
        ]);

        return redirect(route('admin.home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        // $home->delete();
        // Storage::delete($home->logo);
        // Storage::delete($home->bg);
        // Storage::delete($home->rectors_img);
        // Storage::delete($home->rectors_signature);
        // return redirect(route('admin.home.index'));
    }
}
