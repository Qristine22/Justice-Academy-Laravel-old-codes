@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/response/contacts-response.css">
@endsection

@section('content')
    <main>
        <section class="contacts section-text">
            <div class="wrapper">
                <div class="contacts__top flex">
                    <div class="contacts__block">
                        <div class="contacts__map">
                            {!! $contactPage->map !!}
                        </div>
                        <div class="contacts__info">
                            <h3 class="contacts__title text-26">@lang('contact.contacts')</h3>
                            <div class="contacts__about">
                                <span class="contacts__about_name text-20">@lang('contact.address')</span>
                                <span class="contacts__about_info text-20">
                                    {{ $contactPage->{'address_' . app()->getLocale()} }}
                                </span>
                            </div>
                            <div class="contacts__about">
                                <span class="contacts__about_name text-20">@lang('contact.mail')</span>
                                <span class="contacts__about_info text-20">{{ $contactPage->mail }}</span>
                            </div>
                            <div class="contacts__about">
                                <span class="contacts__about_name text-20">@lang('contact.tel')</span>
                                <span class="contacts__about_info text-20">{{ $contactPage->phone }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__block contacts__message">
                        <h3 class="contacts__title text-26">@lang('contact.message-to-the-Rector')</h3>
                        @if (\Session::has('success'))
                            <p class="success">{!! \Session::get('success') !!}</p>
                        @endif
                        <form class="contacts__form" action="{{ route('sendEmail') }}" method="POST">
                            @csrf
                            <div class="contacts__form_inps flex">
                                <input class="inp text-18 contacts__inp contacts__inp-top" type="text" name="name"
                                    placeholder="@lang('contact.name-placeholder')" value="{{ old('name') }}">
                                <input class="inp text-18 contacts__inp contacts__inp-top" type="text" name="mail"
                                    placeholder="@lang('contact.mail-placeholder')" value="{{ old('mail') }}">
                            </div>
                            @error('name')
                                <div class="text-18">{{ $message }}</div>
                            @enderror
                            @error('mail')
                                <div class="text-18">{{ $message }}</div>
                            @enderror
                            <div class="contacts__form_inps flex">
                                <input class="inp text-18 contacts__inp" type="text" name="topic"
                                    placeholder="@lang('contact.topic-placeholder')" value="{{ old('topic') }}">
                            </div>
                            @error('topic')
                                <div class="text-18">{{ $message }}</div>
                            @enderror
                            <div class="contacts__form_inps flex">
                                <textarea class="contacts__textarea inp text-18 contacts__inp" name="content"
                                    placeholder="@lang('contact.content-placeholder')">{{ old('content') }}</textarea>
                            </div>
                            @error('content')
                                <div class="text-18">{{ $message }}</div>
                            @enderror
                            <div class="contacts__form_inps flex">
                                <button class="contacts__btn text-18">
                                    <span class="contacts__btn_span">@lang('contact.send')</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="staff section-text">
            <div class="wrapper">
                <h3 class="contacts__title text-26">@lang('contact.staff')</h3>
                <div class="staff__cont flex">
                    @foreach($contactStaff as $item)
                        <div class="staff__block_item">
                            <div class="staff__item_top">
                                <h3 class="staff__item_bold text-20">{{ $item->{'position_'.app()->getLocale()} }}</h3>
                                <h3 class="staff__item_bold text-18">{!! $item->{'name_'.app()->getLocale()} !!}</h3>
                            </div>
                            <div class="staff__item_bot">
                                <span class="staff__item_info text-18">{{ $item->phone }}</span>
                                <span class="staff__item_info text-18">{{ $item->mail }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
