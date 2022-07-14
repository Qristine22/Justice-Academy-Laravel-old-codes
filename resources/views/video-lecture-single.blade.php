@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css">
    <link rel="stylesheet" href="/css/response/library-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="lecture-single section section-top">
            <div class="wrapper">
                <div class="lecture__top">
                    <h3 class="lecture__title text-20">
                        <span class="lecture__strong">
                            @lang('library.video-lectures.topic')
                        </span>
                        {{ $videoLecture->{'topic_' . app()->getLocale()} }}
                    </h3>
                    <p class="lecture__title text-20">
                        <span class="lecture__strong">
                            @lang('library.video-lectures.lecturer')
                        </span>
                        {{ $videoLecture->{'lecturer_' . app()->getLocale()} }}
                    </p>
                </div>
                <div class="lecture__cont">
                    {!! $videoLecture->video !!}
                </div>
            </div>
        </section>
    </main>
@endsection
