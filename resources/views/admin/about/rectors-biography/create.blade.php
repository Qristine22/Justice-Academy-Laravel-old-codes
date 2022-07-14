@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ռեկտորի կենսագրություն</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.rectors-biography.store') }}" method="POST"
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
                            <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                            <input class="admin-inp" type="text" id="name__en" name="name_en"
                                placeholder="Enter your text here" value="{{ old('name_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ old('name_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ old('name_ru') }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position__en">Position (English)</label>
                            <input class="admin-inp" type="text" id="position__en" name="position_en"
                                placeholder="Enter your text here" value="{{ old('position_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position__am">Position (Armenian)</label>
                            <input class="admin-inp" type="text" id="position__am" name="position_am"
                                placeholder="Enter your text here" value="{{ old('position_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position__ru">Position (Russian)</label>
                            <input class="admin-inp" type="text" id="position__ru" name="position_ru"
                                placeholder="Enter your text here" value="{{ old('position_ru') }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="" alt="">
                            <span class="text-20 form__item_name">Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="img">Attach your File</label>
                            <input class="admin-file admin-file-img" type="file" id="img" name="img">
                        </div>
                    </div>
                    <div class="form__text">
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="biography__en">Biography (English)</label>
                            <textarea class="ckeditor" name="biography_en" id="biography__en"
                                placeholder="Enter Your Text Here">{{ old('biography_en') }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="biography__am">Biography (Armenian)</label>
                            <textarea class="ckeditor" name="biography_am" id="biography__am"
                                placeholder="Enter Your Text Here">{{ old('biography_am') }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="biography__ru">Biography (Russian)</label>
                            <textarea class="ckeditor" name="biography_ru" id="biography__ru"
                                placeholder="Enter Your Text Here">{{ old('biography_ru') }}
                            </textarea>
                        </div>
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