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

        {{-- about/governing-board/decree/$year  dates --}}
        <section class="governing__dates section-top">
            <div class="wrapper">
                <div class="dates__item dates__item-first flex">
                    <div class="about__dates flex">
                        @foreach ($governingBoardDecreesYears as $key => $val)
                            <div class="governing__date date-12">
                                <a class="date about__date @if ($year == $key) date-active @endif"
                                    href="{{ route('governingBoardDecree', ['year' => $key]) }}">{{ $key }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        {{-- about/governing-board/decree/$year  pdfs --}}
        <section class="pdfs section-text">
            <div class="wrapper">
                <div class="pdfs__cont">
                    @foreach ($governingBoardDecrees as $item)

                        {{-- component path  about/decree --}}
                        <x-about.decree :item=$item>
                            <a href="{{ route('governingBoardDecreedownload', ['pdf' => $item->id]) }}">
                                <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="pdf__item_span text-18">
                                    @lang('main.download')
                                </span>
                            </a>
                        </x-about.decree>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
