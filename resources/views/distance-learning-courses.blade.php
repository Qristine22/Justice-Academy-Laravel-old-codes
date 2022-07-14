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
        <section class="courses distance-learning section-text">
            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    @foreach ($courses as $course)
                        <div class="swiper-slide courses__slide-item" data-id="{{ $course->id }}">
                            <div class="courses__item">
                                <a href="{{ route('distanceLearningCourseSyllabus', ['id' => $course->id]) }}">
                                    <img class="img" src="{{ Storage::url($course->img) }}"
                                        alt="{{ $course->{'name_' . app()->getLocale()} }}">
                                </a>
                            </div>
                            <h2 class="courses__item_name text-26">{{ $course->{'name_' . app()->getLocale()} }}</h2>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="courses__triangle"></div>
        </section>
        <section class="courses__pdfs">
            <div class="wrapper">
                <div class="courses__pdfs_cont">
                    @foreach($courses as $course)
                        <div class="courses__block" data-parent-id="{{ $course->id }}">
                            <div class="courses__pdfs_items flex">
                                @foreach ($course->books as $book)
                                    <div class="courses__pdfs_item">
                                        <a href="{{ route('distanceLearningBook', ['id' => $book->id]) }}">
                                            <img class="img" src="{{ Storage::url($book->img) }}" alt="2">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="courses__btns flex">
                                <a href="{{ route('articulate', ['id' => $course->id]) }}">
                                    <button class="courses__btn text-18">
                                        <i class="courses__icon fas fa-play"></i>
                                        @lang('distance-learning.courses')
                                    </button>
                                </a>
                                <a href="{{ route('motivationalVideos', ['id' => $course->id]) }}">
                                    <button class="courses__btn text-18">
                                        <i class="courses__icon fas fa-play"></i>
                                        @lang('distance-learning.motivational-videos')
                                    </button>
                                </a>
                                <a href="{{ route('mediaMaterials', ['id' => $course->id]) }}">
                                    <button class="courses__btn text-18">
                                        <i class="courses__icon fas fa-headphones"></i>
                                        @lang('distance-learning.media-materials')
                                    </button>
                                </a>
                                <a href="{{ route('assignments', ['id' => $course->id]) }}">
                                    <button class="courses__btn text-18">
                                        <i class="courses__icon fas fa-file-signature"></i>
                                        @lang('distance-learning.assignments')
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/pdf.js"></script>
    <script src="/js/distance-learning.js"></script>
@endsection
