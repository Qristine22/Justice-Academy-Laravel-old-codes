@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Գլխավոր էջ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.home.update', ['home' => $home]) }}" method="POST"
                enctype="multipart/form-data">
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
                            <img class="img__file_reader" src="{{ Storage::url($home->logo) }}" alt="">
                            <span class="text-20 form__item_name">Logo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="logo">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="logo" name="logo">
                        </div>
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="{{ Storage::url($home->bg) }}" alt="">
                            <span class="text-20 form__item_name">Background Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="bg">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="bg" name="bg">
                        </div>
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="{{ Storage::url($home->rectors_signature) }}" alt="">
                            <span class="text-20 form__item_name">Rectors Signature</span>
                            <label class="text-20 admin-inp admin-inp-file" for="rectors__signature">
                                Attach your Photo
                            </label>
                            <input class="admin-file admin-file-img" type="file" id="rectors__signature"
                                name="rectors_signature">
                        </div>
                    </div>
                    
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="{{ Storage::url($home->rectors_img) }}" alt="">
                            <span class="text-20 form__item_name">Rectors Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="rectors__img">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="rectors__img" name="rectors_img">
                        </div>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="title__en">Title (English)</label>
                        <textarea class="ckeditor" name="title_en" id="title__en">
                            {{ $home->title_en }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="title__am">Title (Armenian)</label>
                        <textarea class="ckeditor" name="title_am" id="title__am">
                            {{ $home->title_am }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="title__ru">Title (Russian)</label>
                        <textarea class="ckeditor" name="title_ru" id="title__ru">
                            {{ $home->title_ru }}
                        </textarea>
                    </div>

                    <div class="form__item">
                        <label class="text-20" for="rectors_word__en">Rectors Word (English)</label>
                        <textarea class="ckeditor" name="rectors_word_en" id="rectors_word__en">
                            {{ $home->rectors_word_en }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="rectors_word__am">Rectors Word (Armenian)</label>
                        <textarea class="ckeditor" name="rectors_word_am" id="rectors_word__am">
                            {{ $home->rectors_word_am }}
                        </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="rectors_word__ru">Rectors Word (Russian)</label>
                        <textarea class="ckeditor" name="rectors_word_ru" id="rectors_word__ru">
                            {{ $home->rectors_word_ru }}
                        </textarea>
                    </div>
                </div>


                <input type="hidden" name="bgHidden" value="{{ $home->bg }}">
                <input type="hidden" name="logoHidden" value="{{ $home->logo }}">
                <input type="hidden" name="signatureHidden" value="{{ $home->rectors_signature }}">
                <input type="hidden" name="rectorImgHidden" value="{{ $home->rectors_img }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
@endsection
