@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">ԶԼՄ-ները մեր մասին</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.mass-media.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__en">Text (English)</label>
                            <input class="admin-inp" type="text" id="text__en" name="text_en"
                                placeholder="Enter your text here" value="{{ old('text_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__am">Text (Armenian)</label>
                            <input class="admin-inp" type="text" id="text__am" name="text_am"
                                placeholder="Enter your text here" value="{{ old('text_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__ru">Text (Russian)</label>
                            <input class="admin-inp" type="text" id="text__ru" name="text_ru"
                                placeholder="Enter your text here" value="{{ old('text_ru') }}">
                        </div>
                    </div>
                    <div class="inputs__group mass-media__group">
                        <span class="text-20 form__item_name">Link <span class="admin__input_add">+</span></span>
                        <div class="flex form__item-wrap">
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="site__name">Site Name</label>
                                <input class="admin-inp" type="text" id="site__name" name="siteNames[]"
                                    placeholder="Enter your text here" value="{{ old('site_name') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="link__name">Link Name</label>
                                <input class="admin-inp" type="text" id="link__name" name="linkNames[]"
                                    placeholder="Enter your text here" value="{{ old('link_name') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="link">Link</label>
                                <input class="admin-inp" type="text" id="link" name="links[]"
                                    placeholder="Enter your text here" value="{{ old('link') }}">
                            </div>
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="year">Year</label>
                            <input class="admin-inp" type="text" id="year" name="year"
                                placeholder="Enter your text here" value="{{ old('year') }}">
                        </div>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/js/admin/inputsAddMassMedia.js"></script>
@endsection