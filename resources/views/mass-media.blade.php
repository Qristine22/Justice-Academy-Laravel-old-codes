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
        <section class="governing__dates section-top">
            <div class="wrapper">
                <div class="dates__item dates__item-first flex">
                    <div class="about__dates flex">
                        @foreach($years as $key => $val)
                            <div class="governing__date date-12">
                                <a class="date about__date @if($key == $year)date-active @endif"
                                    href="{{ route('massMedia', ['year' => $key]) }}">{{ $key }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section-text section__min-height">
            <div class="wrapper">
                <div class="mass-media__cont">
                    @foreach($massMedia as $massMedium)
                        <div class="mass-media__item">
                            <h3 class="text-26">{{ $massMedium->{'text_'.app()->getLocale()} }}</h3>
                            <div class="mass-media__list">
                                @foreach($massMedium->links as $link)
                                    <div class="mass-media__list_item">
                                        <a class="text-20 mass-media__link-site" target="_blank" href="{{ $link->site_name }}">
                                            {{ $link->site_name }}
                                        </a>
                                        <a class="text-20 mass-media__link" target="_blank" href="{{ $link->link }}">
                                            {{ $link->link_name }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
