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
        <section class="section section-top">
            <div class="wrapper">
                <div class="lectures__cont flex">
                    @foreach($videoLectures as $videoLecture)
                        <div class="lecture flex">
                            <div class="lectures__img">
                                {!! $videoLecture->video !!}
                            </div>
                            <div class="lecture__inner">
                                <h3 class="lecture__title text-20">
                                    <span class="lecture__strong">
                                        @lang('library.video-lectures.topic')
                                    </span>
                                    {{ $videoLecture->{'topic_'.app()->getLocale()} }}
                                </h3>
                                <p class="lecture__title text-20">
                                    <span class="lecture__strong">
                                        @lang('library.video-lectures.lecturer')
                                    </span>
                                    {{ $videoLecture->{'lecturer_'.app()->getLocale()} }}
                                </p>
                                <div class="lecture__bot">
                                    <div class="read-more__cont lectures__read-more__cont">
                                        <a class="read-more lecture__read-more"
                                            href="{{ route('videoLectureSingle', ['id' => $videoLecture->id]) }}">
                                            @lang('library.video-lectures.watch-the-video')
                                        </a>
                                        <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="/js/lecture.js"></script>
@endsection
