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
        <section class="section-text section-top section__min-height">
            <div class="wrapper">
                <div class="conducting-exams__cont">
                    <div class="link__pdfs">
                        @if (@isset($assignments) && count($assignments))
                            @foreach ($assignments as $item)
                                <div class="link__pdf flex">
                                    <a class="link__name text-18" href="{{ Storage::url($item->link) }}"
                                        target="_blank">{{ $item->{'name_' . app()->getLocale()} }}</a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection
