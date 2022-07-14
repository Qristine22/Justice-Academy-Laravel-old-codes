@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/response/news-response.css">
@endsection

@section('content')
    <main>
        <section class="news__home" style="background-image: url({{ Storage::url($news->bg) }}">
            <div class="news__home_cont">
                <div class="wrapper">
                    <h2 class="news__home_title">
                        {{ $news->{'title_' . app()->getLocale()} }}
                    </h2>
                </div>
            </div>
        </section>
        <section class="new-info">
            <div class="wrapper">
                <div class="new-info__cont">
                    <span class="new-info__cont_date">{{ $news->date }}</span>
                    <div class="text-18 new-info__text">
                        {!! $news->{'description_' . app()->getLocale()} !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="new-images">
            <div class="wrapper">
                <div class="new-images_cont">
                    <div class="new-images__top flex">
                        @if (count($news->imgs) > 2)
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($news->imgs as $img)
                                        <div class="swiper-slide new-top__img">
                                            <a href="{{ Storage::url($img->img) }}" target="_blank">
                                                <img class="img" src="{{ Storage::url($img->img) }}"
                                                    alt="{{ Storage::url($img->id) }}">
                                            </a>
                                        </div>
                                    @endforeach
                                    <div class="swiper-button-prev swiper__arrow"></div>
                                    <div class="swiper-button-next swiper__arrow"></div>
                                </div>
                            </div>
                        @else
                            @foreach ($news->imgs as $img)
                                <div class="new-top__imgs flex">
                                    <div class="new-top__img">
                                        <a href="{{ Storage::url($img->img) }}" target="_blank">
                                            <img class="img" src="{{ Storage::url($img->img) }}"
                                                alt="{{ Storage::url($img->id) }}">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>

        @include('includes.news.last-news')
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/news.js"></script>
@endsection
