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
                        @foreach ($graduateYears as $key => $val)
                            <div class="governing__date date-12">
                                <a class="date about__date @if ($key == $year)date-active @endif"
                                    href="{{ route('graduates', ['year' => $key]) }}">{{ $key }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="graduates section-text section__min-height">
            <div class="wrapper">
                <div class="graduates__cont">

                    {{-- judges --}}
                    @if(count($judgeGraduates) > 0)
                        <div class="graduates__item">
                            <h3 class="members__title graduates__title text-26">@lang('about.graduates.judges')</h3>
                            <div class="graduates__items flex">
                                @if(app()->getLocale() == 'am')
                                    @php
                                        $judgeCount = 4;
                                        if(count($judgeGraduates) < 4){
                                            $judgeCount = count($judgeGraduates);
                                        }
                                    @endphp 
                                    @for ($i = 0; $i < $judgeCount; $i++)
                                        <div class="graduate__item">
                                            <img class="img" src="{{ Storage::url($judgeGraduates[$i]->img) }}"
                                                alt="{{ $judgeGraduates[$i]->name }}">
                                            <div class="members__item_cont">
                                                <h3 class="member__title">{{ $judgeGraduates[$i]->name }}</h3>
                                                <h4 class="member__subtitle">{{ $judgeGraduates[$i]->info }}</h4>
                                            </div>
                                        </div>
                                    @endfor
                                    @if(!@empty($judgeGraduates[5]))
                                        <div class="graduate__item">
                                            <img class="img" src="{{ Storage::url($judgeGraduates[5]->img) }}"
                                                alt="{{ $judgeGraduates[5]->name }}">
                                            <a href="{{ route('graduatesJudges', ['year' => $year]) }}">
                                                <div class="members__item_cont members__item_count">
                                                    <span>+{{ count($judgeGraduates) }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @else
                                    @lang('main.info-is-available')
                                @endif
                            </div>
                        </div>
                    @endif

                    {{-- prosecutors --}}
                    @if(count($prosecutorGraduates) > 0)
                        <div class="graduates__item">
                            <h3 class="members__title graduates__title text-26">@lang('about.graduates.prosecutors')</h3>
                            <div class="graduates__items flex">
                                @if(app()->getLocale() == 'am')
                                    @php
                                        $prosecutorCount = 4;
                                        if(count($prosecutorGraduates) < 4){
                                            $prosecutorCount = count($prosecutorGraduates);
                                        }
                                    @endphp 
                                    @for ($i = 0; $i < $prosecutorCount; $i++)
                                        <div class="graduate__item">
                                            <img class="img" src="{{ Storage::url($prosecutorGraduates[$i]->img) }}"
                                                alt="{{ $prosecutorGraduates[$i]->name }}">
                                            <div class="members__item_cont">
                                                <h3 class="member__title">{{ $prosecutorGraduates[$i]->name }}</h3>
                                                <h4 class="member__subtitle">{{ $prosecutorGraduates[$i]->info }}</h4>
                                            </div>
                                        </div>
                                    @endfor
                                    @if(!@empty($prosecutorGraduates[5]))
                                        <div class="graduate__item">
                                            <img class="img" src="{{ Storage::url($prosecutorGraduates[5]->img) }}"
                                                alt="{{ $prosecutorGraduates[5]->name }}">
                                            <a href="{{ route('graduatesProsecutors', ['year' => $year]) }}">
                                                <div class="members__item_cont members__item_count">
                                                    <span>+{{ count($prosecutorGraduates) }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @else
                                    @lang('main.info-is-available')
                                @endif
                            </div>
                        </div>
                    @endif

                    {{-- investigators --}}
                    @if(count($investigatorGraduates) > 0)
                        <div class="graduates__item">
                            <h3 class="members__title graduates__title text-26">@lang('about.graduates.investigators')</h3>
                            <div class="graduates__items flex">
                                @if(app()->getLocale() == 'am')
                                @php
                                    $investigatorCount = 4;
                                    if(count($investigatorGraduates) < 4){
                                        $investigatorCount = count($investigatorGraduates);
                                    }
                                @endphp 
                                @for ($i = 0; $i < $investigatorCount; $i++)
                                    <div class="graduate__item">
                                        <img class="img" src="{{ Storage::url($investigatorGraduates[$i]->img) }}"
                                            alt="{{ $investigatorGraduates[$i]->name }}">
                                        <div class="members__item_cont">
                                            <h3 class="member__title">{{ $investigatorGraduates[$i]->name }}</h3>
                                            <h4 class="member__subtitle">{{ $investigatorGraduates[$i]->info }}</h4>
                                        </div>
                                    </div>
                                @endfor
                                    @if(!@empty($investigatorGraduates[5]))
                                        <div class="graduate__item">
                                            <img class="img" src="{{ Storage::url($investigatorGraduates[5]->img) }}"
                                                alt="{{ $investigatorGraduates[5]->name }}">
                                            <a href="{{ route('graduatesInvestigators', ['year' => $year]) }}">
                                                <div class="members__item_cont members__item_count">
                                                    <span>+{{ count($investigatorGraduates) }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @else
                                    @lang('main.info-is-available')
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
