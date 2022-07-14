@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեսադարան</h2>
            </div>
            <form class="admin__form" action="{{ route('admin.about.gallery.update', ['gallery' => $gallery]) }}" method="POST"
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
                            <label class="text-20 form__item_name" for="text__en">Text (English)</label>
                            <input class="admin-inp" type="text" id="text__en" name="text_en"
                                placeholder="Enter your text here" value="{{ $gallery->text_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__am">Text (Armenian)</label>
                            <input class="admin-inp" type="text" id="text__am" name="text_am"
                                placeholder="Enter your text here" value="{{ $gallery->text_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__ru">Text (Russian)</label>
                            <input class="admin-inp" type="text" id="text__ru" name="text_ru"
                                placeholder="Enter your text here" value="{{ $gallery->text_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="full_date">Full date</label>
                            <input class="admin-inp" type="text" id="full_date" name="full_date"
                                placeholder="Enter your text here" value="{{ $gallery->full_date }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="year">Year</label>
                            <input class="admin-inp" type="text" id="year" name="year"
                                placeholder="Enter your text here" value="{{ $gallery->year }}">
                        </div>
                    </div>
                    <div class="inputs__group">
                        <span class="text-20 form__item_name">Photo <span class="admin__input_add">+</span></span>
                        <div class="flex inputs__add_group form__item-wrap">
                            <div class="form__item form__item-inp">
                                <img class="img__file_reader" src="" alt="">
                                <label class="text-20 admin-inp admin-inp-file" for="img">Attach your File</label>
                                <input class="admin-file admin-file-img" type="file" id="img" name="imgs[]">
                            </div>
                        </div>
                    </div>
                    <div class="inputs__group">
                        <span class="text-20 form__item_name">Photos</span>
                        <div class="flex admin__edit_imgs">
                            @foreach ($gallery->imgs as $img)
                                <div class="admin__edit_img">
                                    <img src="{{ Storage::url($img->img) }}" alt="{{ $gallery->id }}">
                                    <a class="admin__edit_img_delete"
                                        href="{{ route('admin.about.galleryImgDelete', ['id' => $img->id]) }}">
                                        <img class="img" src="/media/img/icons/delete.png" alt="delete">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/js/admin/inputsAdd.js"></script>
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
@endsection
