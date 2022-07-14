@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/partners.css">
    <link rel="stylesheet" href="/css/response/partners-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="partner section-text section-top">
            <div class="wrapper">
                <div class="partner__cont section-text__cont">
                    <div class="partner__top flex">
                        <div class="partner__img">
                            <img class="img" src="{{ Storage::url($partner->logo) }}" alt="1">
                        </div>
                        <h2 class="partners__title partner-single__name">{{ $partner->{'name_' . app()->getLocale()} }}</h2>
                    </div>
                    <div class="partner__info">
                        {!! $partner->{'description_' . app()->getLocale()} !!}
                    </div>
                </div>
            </div>
        </section>

        @if (count($partner->links) > 0)
            <section class="section-text partners__bot">
                <div class="wrapper">
                    <div class="link__pdfs">
                        @foreach ($partner->links as $link)
                            <a class="link__pdf flex" target="_blank"
                                href="{{ !empty($link->link) ? $link->link : Storage::url($link->file) }}">
                                <span class="text-18">{{ $link->{'name_' . app()->getLocale()} }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
