@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/response/home-response.css">
@endsection

@section('content')
    <main>
        @if (!empty($home))
            <section class="home section" style="background-image: url({{ Storage::url($home->bg) }})">
                <div class="wrapper">
                    <div class="home__cont">
                        <div class="home__inner flex">
                            <div class="home__logo">
                                <img class="home__logo_img" src="{{ Storage::url($home->logo) }}" alt="mainLogo">
                            </div>
                            <h1 class="home__title">{!! $home->{'title_' . app()->getLocale()} !!}</h1>
                            <form class="home__form" action="{{ route('search') }}" method="GET">
                                <button class="home__form_btn">
                                    <img class="home__search_icon" src="/media/img/icons/search.png" alt="search">
                                </button>
                                <input class="inp home__form_inp" name="search" type="text" placeholder="@lang('home.search')">
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section rector">
                <div class="wrapper">
                    <div class="rector__cont flex">
                        <div class="rector__img">
                            <img class="img" src="{{ Storage::url($home->rectors_img) }}" alt="rector">
                        </div>
                        <div class="rector__inner">
                            {!! $home->{'rectors_word_' . app()->getLocale()} !!}
                            <img class="rector__signature" src="{{ Storage::url($home->rectors_signature) }}"
                                alt="signature">
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- last 3 news --}}
        @include('includes.news.last-news')
    </main>
@endsection