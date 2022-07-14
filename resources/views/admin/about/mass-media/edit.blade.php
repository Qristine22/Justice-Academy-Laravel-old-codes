@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">ԶԼՄ-ները մեր մասին</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.mass-media.update', ['mass_medium' => $massMedia]) }}"
                method="POST">
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
                                placeholder="Enter your text here" value="{{ $massMedia->text_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__am">Text (Armenian)</label>
                            <input class="admin-inp" type="text" id="text__am" name="text_am"
                                placeholder="Enter your text here" value="{{ $massMedia->text_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__ru">Text (Russian)</label>
                            <input class="admin-inp" type="text" id="text__ru" name="text_ru"
                                placeholder="Enter your text here" value="{{ $massMedia->text_ru }}">
                        </div>
                    </div>
                    <div class="inputs__group mass-media__group">
                        <span class="text-20 form__item_name">Links <span class="admin__input_add">+</span></span>
                        <div class="flex form__item-wrap">
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="site__name">Site Name</label>
                                <input class="admin-inp" type="text" id="site__name" name="siteNames[]"
                                    placeholder="Enter your text here" value="{{ $massMedia->site_name }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="link__name">Link Name</label>
                                <input class="admin-inp" type="text" id="link__name" name="linkNames[]"
                                    placeholder="Enter your text here" value="{{ $massMedia->link_name }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="link">Link</label>
                                <input class="admin-inp" type="text" id="link" name="links[]"
                                    placeholder="Enter your text here" value="{{ $massMedia->link }}">
                            </div>
                        </div>
                    </div>
                    
                    @if(count($massMedia->links) > 0)
                        <div class="inputs__group">
                            <span class="text-20 form__item_name">Links</span>
                            <div class="flex admin__edit_imgs admin__edit_column">
                                @foreach ($massMedia->links as $link)
                                    <div class="admin__edit_img admin__edit_bordered">
                                        <span class="text-20">{{ $link->site_name }}</span>
                                        <a class="text-18 admin__edit_link" href="{{ $link->link }}">{{ $link->link_name }}</a>
                                        <a class="admin__edit_img_delete"
                                            href="{{ route('admin.about.massMediaLinkDelete', ['id' => $link->id]) }}">
                                            <img class="img" src="/media/img/icons/delete.png" alt="delete">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="year">Year</label>
                            <input class="admin-inp" type="text" id="year" name="year"
                                placeholder="Enter your text here" value="{{ $massMedia->year }}">
                        </div>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/js/admin/inputsAddMassMedia.js"></script>
@endsection
