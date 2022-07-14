@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/partners.css">
    <link rel="stylesheet" href="/css/response/partners-response.css">
@endsection

@section('content')
    <main>
        <section class="partners section-text">
            <div class="wrapper">
                <div class="partners__cont">
                    <div class="partners__item" id="international">
                        <h2 class="partners__title">@lang('partners.international')</h2>
                        <div class="partners__items">
                            @foreach($internationals as $international)
                                <div class="partner__item">
                                    <a class="partners__link" href="{{ route('partnerSingle', ['id' => $international->id]) }}">
                                        <img class="partner__img img" src="{{ Storage::url($international->logo) }}" alt="logo">
                                    </a>
                                    <h3 class="partner__name">{{ $international->{'name_'.app()->getLocale()} }}</h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="partners__item" id="foreign">
                        <h2 class="partners__title">@lang('partners.foreign')</h2>
                        <div class="partners__items">
                            @foreach($foreigns as $foreign)
                                <div class="partner__item">
                                    <a class="partners__link" href="{{ route('partnerSingle', ['id' => $foreign->id]) }}">
                                        <img class="partner__img img" src="{{ Storage::url($foreign->logo) }}" alt="logo">
                                    </a>
                                    <h3 class="partner__name">{{ $foreign->{'name_'.app()->getLocale()} }}</h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="partners__item" id="arm&artsakh">
                        <h2 class="partners__title">@lang('partners.arm&artsakh')</h2>
                        <div class="partners__items">
                            @foreach($armArtsakhs as $armArtsakh)
                                <div class="partner__item">
                                    <a class="partners__link" href="{{ route('partnerSingle', ['id' => $armArtsakh->id]) }}">
                                        <img class="partner__img img" src="{{ Storage::url($armArtsakh->logo) }}" alt="logo">
                                    </a>
                                    <h3 class="partner__name">{{ $armArtsakh->{'name_'.app()->getLocale()} }}</h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
