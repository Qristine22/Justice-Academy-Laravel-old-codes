@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Լրացուցիչ մեդիա-նյութեր</h2>
            </div>

            <form class="admin__form"
                action="{{ route('admin.distance-learning.additional-material.update',
                ['additional_material' => $additionalMaterial]) }}" method="POST" enctype="multipart/form-data">
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
                                placeholder="Enter your text here" value="{{ $additionalMaterial->name_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ $additionalMaterial->name_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ $additionalMaterial->name_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="course">Course</label>
                            <select class="admin-inp" name="course_id" id="course">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}"
                                        @if($course->id === $additionalMaterial->course_id)selected @endif>
                                        {{ $course->name_am }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="inputs__group additional-material__group">
                        <span class="text-20 form__item_name">Link <span class="admin__input_add">+</span></span>
                        <div class="flex form__item-wrap">
                            <div class="form__item form__item-inp">
                                <span class="text-20 form__item_name">File</span>
                                <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="pdf">Attach your File</label>
                                <input class="admin-file admin-file-pdf" type="file" id="pdf" name="pdfs[]" accept=".pdf">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="link">Link</label>
                                <input class="admin-inp" type="text" id="link" name="links[]"
                                    placeholder="Enter your text here" value="{{ old('link') }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="link__name">Link Name</label>
                                <input class="admin-inp" type="text" id="link__name" name="linkNames[]"
                                    placeholder="Enter your text here" value="{{ old('link_name') }}">
                            </div>
                        </div>
                    </div>
                    @if(count($additionalMaterial->links) > 0)
                        <div class="inputs__group">
                            <span class="text-20 form__item_name">Links</span>
                            <div class="flex admin__edit_imgs admin__edit_column">
                                @foreach ($additionalMaterial->links as $link)
                                    <div class="admin__edit_img admin__edit_bordered">
                                        @if (!empty($link->link))
                                            <a class="text-18 admin__edit_link" href="{{ $link->link }}" target="_blank">
                                                {{ $link->link_name }}
                                            </a>
                                        @else
                                            <a class="text-18 admin__edit_link" href="{{ Storage::url($link->pdf) }}"
                                                target="_blank"> {{ $link->link_name }}
                                            </a>
                                        @endif
                                        <a class="admin__edit_img_delete"
                                            href="{{ route('admin.distance-learning.additionalMaterialLinkDelete',
                                            ['id' => $link->id]) }}">
                                            <img class="img" src="/media/img/icons/delete.png" alt="delete">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>


                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
    <script src="/js/admin/inputsAddAdditionalMaterials.js"></script>
@endsection