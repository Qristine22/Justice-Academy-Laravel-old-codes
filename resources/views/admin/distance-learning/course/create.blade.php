@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Դասընթացներ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.distance-learning.courses.store') }}" method="POST"
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
                            <label class="text-20 form__item_name" for="syllabus_pdf_name__en">syllabus pdf name (English)</label>
                            <input class="admin-inp" type="text" id="syllabus_pdf_name__en" name="syllabus_pdf_name_en"
                                placeholder="Enter your text here" value="{{ old('syllabus_pdf_name_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="syllabus_pdf_name__am">
                                syllabus pdf name (Armenian)
                            </label>
                            <input class="admin-inp" type="text" id="syllabus_pdf_name__am" name="syllabus_pdf_name_am"
                                placeholder="Enter your text here" value="{{ old('syllabus_pdf_name_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="syllabus_pdf_name__ru">syllabus pdf name (Russian)</label>
                            <input class="admin-inp" type="text" id="syllabus_pdf_name__ru" name="syllabus_pdf_name_ru"
                                placeholder="Enter your text here" value="{{ old('syllabus_pdf_name_ru') }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Photo</span>
                            <img class="img__file_reader" src="" alt="">
                            <label class="text-20 admin-inp admin-inp-file" for="img">Attach your File</label>
                            <input class="admin-file admin-file-img" type="file" id="img" name="img">
                        </div>
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Syllabus pdf</span>
                            <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="syllabus__pdf">Attach your File</label>
                            <input class="admin-file admin-file-pdf" type="file" id="syllabus__pdf" name="syllabus_pdf">
                        </div>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="syllabus__en">Syllabus (English)</label>
                        <textarea class="ckeditor" name="syllabus_en" id="syllabus__en" placeholder="Enter Your Text Here">
                            {{ old('syllabus_en') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="syllabus__am">Syllabus (Armenian)</label>
                        <textarea class="ckeditor" name="syllabus_am" id="syllabus__am" placeholder="Enter Your Text Here">
                            {{ old('syllabus_am') }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="syllabus__ru">Syllabus (Russian)</label>
                        <textarea class="ckeditor" name="syllabus_ru" id="syllabus__ru" placeholder="Enter Your Text Here">
                            {{ old('syllabus_ru') }}
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
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
@endsection
