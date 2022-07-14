@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի կառուցվածք</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.academy-structure.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="link">Link</label>
                            <input class="admin-inp" type="text" id="link" name="link"
                                placeholder="Enter your text here" value="{{ old('link') }}">
                        </div>
                    </div>
                </div>
                <div class="form__text">
                    <div class="form__text">
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                            <textarea class="ckeditor" name="name_en" id="name__en" placeholder="Enter Your Text Here">
                                {{ old('name_en') }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <textarea class="ckeditor" name="name_am" id="name__am" placeholder="Enter Your Text Here">
                                {{ old('name_am') }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <textarea class="ckeditor" name="name_ru" id="name__ru" placeholder="Enter Your Text Here">
                                {{ old('name_ru') }}
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
@endsection