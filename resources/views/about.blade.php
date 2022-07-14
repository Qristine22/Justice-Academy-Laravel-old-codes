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
        <section class="section section-text section-top section__min-height">
            <div class="wrapper">
                <div class="section-text__cont">
                    @if (!empty($about))
                        {!! $about->{'text_'.app()->getLocale()} !!}
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
