@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot", ['headersBot' => $headersBot])
@endsection

@section('content')
    <main>
        <section class="section-text section-top section__min-height">
            <div class="wrapper">
                <div class="section-text__cont">
                    @if (app()->getLocale() == 'am')
                            {!! $candidate->text !!}
                    @else
                        <h4>@lang('main.info-is-available')</h4>
                    @endif
                </div>
            </div>
        </section>
        
        @include('includes.about.admission.admission-menu')
    </main>
@endsection
