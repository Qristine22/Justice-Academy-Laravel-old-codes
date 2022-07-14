@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ընդունելություն</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.admission.update', ['admission' => $admission]) }}"
                method="POST">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="text__en">text (English)</label>
                        <textarea class="ckeditor" name="text_en" id="text__en"
                            placeholder="Enter Your Text Here">{{ $admission->text_en }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="text__am">text (Armenian)</label>
                        <textarea class="ckeditor" name="text_am" id="text__am"
                            placeholder="Enter Your Text Here">{{ $admission->text_am }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="text__ru">text (Russian)</label>
                        <textarea class="ckeditor" name="text_ru" id="text__ru"
                            placeholder="Enter Your Text Here">{{ $admission->text_ru }}</textarea>
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
