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
        <section class="graduates-profession section-text section-top section__min-height">
            <div class="wrapper">
                <div class="graduates__cont">
                    <div class="graduates__item">
                        <h3 class="members__title graduates-profession__title text-26">
                            @if($position == 'judge')
                                @lang('about.graduates.judges') - {{ $year  }}
                            @endif
                            @if($position == 'prosecutor')
                                @lang('about.graduates.prosecutors') - {{ $year  }}
                            @endif
                            @if($position == 'investigator')
                                @lang('about.graduates.investigators') - {{ $year  }}
                            @endif
                        </h3>
                        <div class="graduates-profession__items">
                            @foreach ($graduates as $graduate)
                                <div class="graduate-profession__item">
                                    <img class="img" src="{{ Storage::url($graduate->img) }}"
                                        alt="{{ $graduate->name }}">
                                    <div class="members__item_cont">
                                        <h3 class="member__title">{{ $graduate->name }}</h3>
                                        <h4 class="member__subtitle">{{ $graduate->info }}</h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
