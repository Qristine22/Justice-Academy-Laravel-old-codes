@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/response/news-response.css">
@endsection

@section('content')
    <main>
        <section class="section news__section">
            <div class="wrapper">
                <div class="news__cont flex">
                    @foreach($news as $item)
                        <div class="new flex">
                            <div class="news__img">
                                <a href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                    <img class="img news__item_img" src="{{ Storage::url($item->bg) }}" alt="{{ $item->id }}">
                                </a>
                            </div>
                            <div class="new__inner">
                                <span class="new__date text-20">{{ $item->date }}</span>
                                <h3 class="new__title">
                                    <a href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                        {{ $item->{'title_'.app()->getLocale()} }}
                                    </a>
                                </h3>
                                <div class="new__subtitle">
                                    <a href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                        {!! $item->{'description_'.app()->getLocale()} !!}
                                    </a>
                                </div>
                                <div class="new__bot">
                                    <div class="read-more__cont news__read-more__cont">
                                        <a class="read-more new__read-more"
                                            href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                            @lang('main.read-more')    
                                        </a>
                                        <img class="read-more__arrow" src="/media/img/icons/longArrow.png"
                                            alt="longArrow">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    {{ $news->links('includes.pagination.paginate') }}
                </div>
            </div>
        </section>
    </main>
@endsection