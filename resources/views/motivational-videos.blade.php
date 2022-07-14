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
        <section class="motivation section-text distance-learning">
            <div class="wrapper">
                <div class="motivation__cont flex">
                    @foreach($motivationalVideos as $motivationalVideo)
                        <div class="motivation__item flex">
                            {!! $motivationalVideo->video !!}
                            <span class="motivation__item_name text-20">
                                {{ $motivationalVideo->{'name_'.app()->getLocale()} }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection
