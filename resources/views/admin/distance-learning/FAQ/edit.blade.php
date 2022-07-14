@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Հաճախակի տրվող հարցեր</h2>
            </div>
            <form class="admin__form" action="{{ route('admin.distance-learning.FAQ.update', ['FAQ' => $FAQ]) }}" method="POST">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="title__en">Title (English)</label>
                            <input class="admin-inp" type="text" id="title__en" name="title_en"
                                placeholder="Enter your text here" value="{{ $FAQ->title_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="title__am">Title (Armenian)</label>
                            <input class="admin-inp" type="text" id="title__am" name="title_am"
                                placeholder="Enter your text here" value="{{ $FAQ->title_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="title__ru">Title (Russian)</label>
                            <input class="admin-inp" type="text" id="title__ru" name="title_ru"
                                placeholder="Enter your text here" value="{{ $FAQ->title_ru }}">
                        </div>
                    </div>
                    <div class="form__item inputs__group">
                        <label class="text-20 form__item_name" for="text__en">Text (English)</label>
                        <textarea class="ckeditor" name="text_en" id="text__en"
                            placeholder="Enter Your Text Here">{{ $FAQ->text_en }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="text__am">Text (Armenian)</label>
                        <textarea class="ckeditor" name="text_am" id="text__am"
                            placeholder="Enter Your Text Here">{{ $FAQ->text_am }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="text__ru">Text (Russian)</label>
                        <textarea class="ckeditor" name="text_ru" id="text__ru"
                            placeholder="Enter Your Text Here">{{ $FAQ->text_ru }}</textarea>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
