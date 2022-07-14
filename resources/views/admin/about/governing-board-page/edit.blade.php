@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի մասին</h2>
            </div>

            <form class="admin__form"
                action="{{ route('admin.about.governing-board-page.update',
                ['governing_board_page' => $governingBoardPage]) }}"
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
                        <label class="text-20" for="text__en">Text English</label>
                        <textarea class="ckeditor" name="text_en" id="text__en">{{ $governingBoardPage->text_en }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="text__am">Text Armenian</label>
                        <textarea class="ckeditor" name="text_am" id="text__am">{{ $governingBoardPage->text_am }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="text__ru">Text Russian</label>
                        <textarea class="ckeditor" name="text_ru" id="text__ru">{{ $governingBoardPage->text_ru }}</textarea>
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
