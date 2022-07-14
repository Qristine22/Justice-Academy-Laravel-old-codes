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
        <section class="section-text section-top">
            <div class="wrapper">
                <div class="section-text__cont">
                    <div class="rector__cont">
                        {!! $text->{'text_'.app()->getLocale()} !!}
                    </div>
                </div>
            </div>
        </section>
        
        @include('includes.about.rector.rector-menu')
    </main>
@endsection
