@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="distance-learning section-text">
            <div class="wrapper">
                <div class="videos__cont">
                    @foreach($videoMaterials as $videoMaterial)
                        <div class="videos__item flex">
                            <video class="videos__video" controls="controls">
                                <source src="{{ Storage::url($videoMaterial->video) }}" type="video/mp4"
                                    data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                                <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                                @lang('main.browser-does-not-support')
                            </video>
                            <span class="video__name text-20">{{ $videoMaterial->{'name_'.app()->getLocale()} }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
