<section class="section last-news">
    <div class="wrapper">
        <h2 class="last-news__title">@lang('news.news')</h2>
        <div class="last-news__cont">
            <div class="last-news__items flex">
                @foreach($lastNews as $item)
                    <div class="last-news__item">
                        <div class="last-news__item_top">
                            <a href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                <img class="img news__item_img" src="{{ Storage::url($item->bg) }}" alt="{{ $item->id }}">
                            </a>
                        </div>
                        <div class="last-news__item_cont">
                            <a class="last-news__item_link" href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                {{ $item->{'title_'.app()->getLocale()} }}
                            </a>
                            <div class="read-more__cont">
                                <a class="read-more" href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                    @lang('main.read-more')    
                                </a>
                                <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>