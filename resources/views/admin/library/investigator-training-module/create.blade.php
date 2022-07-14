@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">{{ $title }}</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.library.investigator-training-module.store') }}" method="POST"
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
                            <span class="text-20 form__item_name">Photo</span>
                            <img class="img__file_reader" src="" alt="">
                            <label class="text-20 admin-inp admin-inp-file" for="img">Attach your File</label>
                            <input class="admin-file admin-file-img" type="file" id="img" name="img">
                        </div>
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">File</span>
                            <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="pdf">Attach your File</label>
                            <input class="admin-file admin-file-pdf" type="file" id="pdf" name="pdf" accept=".pdf">
                        </div>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
@endsection