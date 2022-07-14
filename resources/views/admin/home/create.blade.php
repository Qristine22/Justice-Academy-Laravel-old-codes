@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Գլխավոր էջ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.home.store') }}" method="POST"
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
                            <img class="img__file_reader" src="" alt="">
                            <span class="text-20 form__item_name">Logo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="logo">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="logo" name="logo">
                        </div>
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="" alt="">
                            <span class="text-20 form__item_name">Background Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="bg">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="bg" name="bg">
                        </div>
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="" alt="">
                            <span class="text-20 form__item_name">Attach your Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="rectors__signature">
                                Attach Rectors Signature
                            </label>
                            <input class="admin-file admin-file-img" type="file" id="rectors__signature" name="rectors_signature">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="" alt="">
                            <span class="text-20 form__item_name">Rectors Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="rectors__img">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="rectors__img" name="rectors_img">
                        </div>
                    </div>

                    <div class="form__item">
                        <label class="text-20" for="title__en">Title (English)</label>
                        <textarea class="ckeditor" name="title_en" id="title__en">
                            {{ old('title_en') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="title__am">Title (Armenian)</label>
                        <textarea class="ckeditor" name="title_am" id="title__am">
                            {{ old('title_am') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="title__ru">Title (Russian)</label>
                        <textarea class="ckeditor" name="title_ru" id="title__ru">
                            {{ old('title_ru') }}
                        </textarea>
                    </div>

                    <div class="form__item inputs__group">
                        <label class="text-20 form__item_name" for="rectors_word__en">Rectors Word (English)</label>
                        <textarea class="ckeditor" name="rectors_word_en" id="rectors_word__en">
                            {{ old('rectors_word_en') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="rectors_word__am">Rectors Word (Armenian)</label>
                        <textarea class="ckeditor" name="rectors_word_am" id="rectors_word__am">
                            {{ old('rectors_word_am') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="rectors_word__ru">Rectors Word (Russian)</label>
                        <textarea class="ckeditor" name="rectors_word_ru" id="rectors_word__ru">
                            {{ old('rectors_word_ru') }}
                        </textarea>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
@endsection