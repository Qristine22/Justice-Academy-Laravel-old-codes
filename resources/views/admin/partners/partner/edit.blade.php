@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Գործընկերներ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.partners.partner.update', ['partner' => $partner]) }}"
                method="POST" enctype="multipart/form-data">
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
                            <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                            <input class="admin-inp" type="text" id="name__en" name="name_en"
                                placeholder="Enter your text here" value="{{ $partner->name_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ $partner->name_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ $partner->name_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Logo</span>
                            <img class="img__file_reader" src="{{ Storage::url($partner->logo) }}" alt="">
                            <label class="text-20 admin-inp admin-inp-file" for="logo">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="logo" name="logo">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="category">Category</label>
                            <select class="admin-inp" name="category" id="category">
                                <option value="international" @if ($partner->category == 'international') selected @endif>
                                    Միջազգային
                                </option>
                                <option value="foreign" @if ($partner->category == 'foreign') selected @endif>
                                    Օտարերկրյա
                                </option>
                                <option value="arm&artsakh" @if ($partner->category == 'arm&artsakh') selected @endif>
                                    Հայաստանյան և Արցախյան
                                </option>
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

                    @if (count($partner->links) > 0)
                        <div class="inputs__group">
                            <span class="text-20 form__item_name">Links</span>
                            <div class="flex admin__edit_imgs admin__edit_column">
                                @foreach ($partner->links as $link)
                                    <div class="admin__edit_img admin__edit_bordered">
                                        <span class="text-20">{{ $link->name_en }}</span>
                                        <span class="text-20">{{ $link->name_am }}</span>
                                        <span class="text-20">{{ $link->name_ru }}</span>
                                        @if (!empty($link->link))
                                            <a class="text-18 admin__edit_link" href="{{ $link->link }}">
                                                {{ $link->link }}
                                            </a>
                                        @else
                                            <img class="edit__inputs_pdf" src="/media/img/icons/pdf.png" alt="pdf">
                                        @endif
                                        <a class="admin__edit_img_delete"
                                            href="{{ route('admin.partners.partnerLinkDelete', ['id' => $link->id]) }}">
                                            <img class="img" src="/media/img/icons/delete.png" alt="delete">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="form__item">
                        <label class="text-20" for="description__en">Description (English)</label>
                        <textarea class="ckeditor" name="description_en" id="description__en">
                                {{ $partner->description_en }}
                            </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="description__am">Description (Armenian)</label>
                        <textarea class="ckeditor" name="description_am" id="description__am">
                                {{ $partner->description_am }}
                            </textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="description__ru">Description (Russian)</label>
                        <textarea class="ckeditor" name="description_ru" id="description__ru">
                                {{ $partner->description_ru }}
                            </textarea>
                    </div>
                </div>


                <input type="hidden" name="logoHidden" value="{{ $partner->logo }}">
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
