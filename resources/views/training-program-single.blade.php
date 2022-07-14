@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="pdfs section-text section-top education-single">
            <div class="wrapper">
                <div class="pdfs__cont">
                    <h3 class="pdfs__title">
                        @if($category == 'judge')
                            @lang('full-time-education.judiciary-training')
                        @elseif($category == 'prosecutor')
                            @lang('full-time-education.prosecutorial-training')
                        @elseif($category == 'investigator')
                            @lang('full-time-education.investigative-training')
                        @endif
                        - {{ $year }}
                    </h3>
                    @foreach($trainingPrograms as $item)
                        <div class="pdf__item training__pdf section-text__cont">
                            <h3 class="bold__title training-program__title text-20">
                                <a href="{{ Storage::url($item->pdf) }}" target="_blank">
                                    {{ $item->{'name_'.app()->getLocale()} }}
                                </a>
                            </h3>
                            <div class="pdf__item_inner flex">
                                <div class="pdf__item_cont">
                                    <p class="pdf__name text-18">
                                        @if(app()->getLocale() == 'am')
                                            {!! $item->description !!}
                                        @else
                                            @lang('main.info-is-available')
                                        @endif
                                    </p>
                                </div>
                                <div class="pdf__item_icon">
                                    <a href="{{ route('trainingProgramDownload', ['year' => $year, 'category' => $category, 'pdf' => $item->id]) }}">
                                        <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                        <span class="pdf__item_span text-18">
                                            @lang('main.download')
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
