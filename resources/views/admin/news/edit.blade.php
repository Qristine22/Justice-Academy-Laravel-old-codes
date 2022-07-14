@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Նորություններ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.news.update', ['news' => $news]) }}" method="POST"
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
                            <label class="text-20 form__item_name" for="title__en">Title (English)</label>
                            <input class="admin-inp" type="text" id="title__en" name="title_en"
                                placeholder="Enter your text here" value="{{ $news->title_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="title__am">Title (Armenian)</label>
                            <input class="admin-inp" type="text" id="title__am" name="title_am"
                                placeholder="Enter your text here" value="{{ $news->title_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="title__ru">Title (Russian)</label>
                            <input class="admin-inp" type="text" id="title__ru" name="title_ru"
                                placeholder="Enter your text here" value="{{ $news->title_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Background Photo</span>
                            <img class="img__file_reader" src="{{ Storage::url($news->bg) }}" alt="">
                            <label class="text-20 admin-inp admin-inp-file" for="bg">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="bg" name="bg">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="date">Date</label>
                            <input class="admin-inp" type="text" id="date" name="date"
                                placeholder="Enter your text here" value="{{ $news->date }}">
                        </div>
                    </div>
                    <div class="inputs__group">
                        <span class="text-20 form__item_name">Photo <span class="admin__input_add">+</span></span>
                        <div class="flex inputs__add_group form__item-wrap">
                            <div class="form__item form__item-inp">
                                <img class="img__file_reader" src="" alt="">
                                <label class="text-20 admin-inp admin-inp-file" for="imgs">Attach your File</label>
                                <input class="admin-file admin-file-img" type="file" id="imgs" name="imgs[]">
                            </div>
                        </div>
                    </div>
                    <div class="inputs__group">
                        <span class="text-20 form__item_name">Photos</span>
                        <div class="flex admin__edit_imgs">
                            @foreach ($news->imgs as $img)
                                <div class="admin__edit_img">
                                    <img src="{{ Storage::url($img->img) }}" alt="{{ $news->name_am }}">
                                    <a class="admin__edit_img_delete"
                                        href="{{ route('admin.news.ImgDelete', ['id' => $img->id]) }}">
                                        <img class="img" src="/media/img/icons/delete.png" alt="delete">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form__text">
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="description__en">Description (English)</label>
                            <textarea class="ckeditor" name="description_en" id="description__en"
                                placeholder="Enter Your Text Here">{{ $news->description_en }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="description__am">Description (Armenian)</label>
                            <textarea class="ckeditor" name="description_am" id="description__am"
                                placeholder="Enter Your Text Here">{{ $news->description_am }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="description__ru">Description (Russian)</label>
                            <textarea class="ckeditor" name="description_ru" id="description__ru"
                                placeholder="Enter Your Text Here">{{ $news->description_ru }}
                            </textarea>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="bgHidden" value="{{ $news->bg }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/js/admin/inputsAdd.js"></script>
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
@endsection
