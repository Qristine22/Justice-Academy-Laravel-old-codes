@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="section-text section-top section__min-height">
            <div class="wrapper">
                <div class="member__cont">
                    @if(@isset($person))
                        <div class="member__info">
                            <h2 class="member__name">{{ $person->{'name_'.app()->getLocale()} }}</h2>

                            @if(@isset($person->position_en) || @isset($person->position_am) || @isset($person->position_ru))
                                <p class="member__position">{{ $person->{'position_'.app()->getLocale()} }}</p>
                            @endif


                            @if(app()->getLocale() == 'am')
                                {!! $person->biography !!}

                            @else
                                <h4>@lang('main.info-is-available')</h4>
                            @endif
                        </div>
                        
                        @if (@isset($person->img))
                            <div class="member__img">
                                <img class="img" src="{{ Storage::url($person->img) }}" alt="img">
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection


@section('scripts')
    <script src="/js/swiper.js"></script>
@endsection