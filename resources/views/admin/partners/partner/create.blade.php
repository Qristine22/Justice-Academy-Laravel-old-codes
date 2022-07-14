@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Գործընկերներ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.partners.partner.store') }}" method="POST"
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
                            <span class="text-20 form__item_name">Logo</span>
                            <img class="img__file_reader" src="" alt="">
                            <label class="text-20 admin-inp admin-inp-file" for="logo">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="logo" name="logo">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="category">Category</label>
                            <select class="admin-inp" name="category" id="category">
                                <option value="international">Միջազգային</option>
                                <option value="foreign">Օտարերկրյա</option>
                                <option value="arm&artsakh">Հայաստանյան և Արցախյան</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputs__group links__group">
                        <span class="text-20 form__item_name">Link <span class="admin__input_add">+</span></span>
                        <div class="flex form__item-wrap">
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                                <input class="admin-inp" type="text" id="name__en" name="enNames[]"
                                    placeholder="Enter your text here" value="{{ old('name_en') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                                <input class="admin-inp" type="text" id="name__am" name="amNames[]"
                                    placeholder="Enter your text here" value="{{ old('name_am') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                                <input class="admin-inp" type="text" id="name__ru" name="ruNames[]"
                                    placeholder="Enter your text here" value="{{ old('name_ru') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="link">Link</label>
                                <input class="admin-inp" type="text" id="link" name="links[]"
                                    placeholder="Enter your text here" value="{{ old('link') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <span class="text-20 form__item_name">File</span>
                                <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="file">Attach your File</label>
                                <input class="admin-file admin-file-pdf" type="file" id="file" name="pdfs[]" accept=".pdf">
                            </div>
                        </div>
                    </div>
                    <div class="form__item inputs__group">
                        <label class="text-20 form__item_name" for="description__en">Description (English)</label>
                        <textarea class="ckeditor" name="description_en" id="description__en">
                            {{ old('description_en') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="description__am">Description (Armenian)</label>
                        <textarea class="ckeditor" name="description_am" id="description__am">
                            {{ old('description_am') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="description__ru">Description (Russian)</label>
                        <textarea class="ckeditor" name="description_ru" id="description__ru">
                            {{ old('description_ru') }}
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
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
    <script src="/js/admin/inputsAddPartners.js"></script>
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
@endsection