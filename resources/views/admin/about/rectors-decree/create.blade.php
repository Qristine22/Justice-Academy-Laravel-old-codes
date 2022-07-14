@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ռեկտորի Հրամաններ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.rectors-decree.store') }}" method="POST"
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
                            <label class="text-20 form__item_name" for="info__en">Info (English)</label>
                            <input class="admin-inp" type="text" id="info__en" name="info_en"
                                placeholder="Enter your text here" value="{{ old('info_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="info__am">Info (Armenian)</label>
                            <input class="admin-inp" type="text" id="info__am" name="info_am"
                                placeholder="Enter your text here" value="{{ old('info_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="info__ru">Info (Russian)</label>
                            <input class="admin-inp" type="text" id="info__ru" name="info_ru"
                                placeholder="Enter your text here" value="{{ old('info_ru') }}">
                        </div>
                    </div>
                    <div class="form__text">
                        <div class="flex inputs__group">
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="pdf__name">File name</label>
                                <input class="admin-inp" type="text" id="pdf__name" name="pdf_name"
                                    placeholder="Enter your text here" value="{{ old('pdf_name') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <span class="text-20 form__item_name">file</span>
                                <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="pdf">Attach your File</label>
                                <input class="admin-file admin-file-pdf" type="file" id="pdf" name="pdf" accept=".pdf">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
@endsection