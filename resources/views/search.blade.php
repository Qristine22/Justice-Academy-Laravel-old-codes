@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/search.css">
    <link rel="stylesheet" href="/css/response/search-response.css">
@endsection

@section('content')
    <main>
        <div class="search section">
            <div class="wrapper">
                <div class="search__cont">
                    <div class="results">
                        @if (@isset($searchResults) && !empty($searchResults))
                            @foreach ($searchResults as $result)
                                <div class="result">

                                    {{-- translation with table name --}}
                                    @if (isset($result[0]) && !empty($result[0]->getTable()))
                                        <h3 class="search__title">
                                            @lang('tables.'.$result[0]->getTable())
                                        </h3>
                                    @endif
                                    @if (count($result) > 0)
                                        @foreach ($result as $item)
                                            <div class="search__link_wrap">
                                                <a class="search__link text-20" href="{{ route('search.'.$result[0]->getTable(), ['id' => $item->id]) }}">
                                                    @if (isset($item->name_en))
                                                        {!! $item->{'name_' . app()->getLocale()} !!}
                                                    @elseif (isset($item->title_en))
                                                        {!! $item->{'title_' . app()->getLocale()} !!}
                                                    @elseif (isset($item->description_en))
                                                        {!! $item->{'description_' . app()->getLocale()} !!}
                                                    @elseif (isset($item->info_en))
                                                        {!! $item->{'info_' . app()->getLocale()} !!}
                                                    @elseif (isset($item->info))
                                                        {!! $item->info !!}
                                                    @elseif (isset($item->text_en))
                                                        {!! $item->{'text_' . app()->getLocale()} !!}
                                                    @elseif (isset($item->address_en))
                                                        {!! $item->{'address_' . app()->getLocale()} !!}
                                                    @elseif (isset($item->text))
                                                        {!! $item->text !!}
                                                    @elseif (isset($item->topic_en))
                                                        {!! $item->{'topic_' . app()->getLocale()} !!}
                                                    @endif
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
