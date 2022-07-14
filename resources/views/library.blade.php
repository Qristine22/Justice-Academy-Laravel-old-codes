@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css">
    <link rel="stylesheet" href="/css/response/library-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="section section-top section__min-height">
            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    @if(!empty($data))
                        @foreach($data as $item)
                            <div class="swiper-slide courses__slide-item">
                                <div class="courses__item">
                                    <a href="{{ Storage::url($item->pdf) }}" target="_blank">
                                        <img class="img" src="{{ Storage::url($item->img) }}"
                                        alt="{{ $item->{'name_'.app()->getLocale()} }}">
                                    </a>
                                    <a href="{{ route('LibraryBookDownload', ['pdf' => $item->id]) }}">
                                        <span class="pdfs__item_layer"></span>
                                        <span class="pdfs__item_see-all text-18">
                                            <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                            @lang('main.download')
                                        </span>
                                    </a>
                                </div>
                                <h2 class="courses__item_name text-26">
                                    {{ $item->{'name_'.app()->getLocale()} }}
                                </h2>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/pdf.js"></script>
@endsection
