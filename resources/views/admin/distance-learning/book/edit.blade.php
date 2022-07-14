@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Գրքեր</h2>
            </div>
            <form class="admin__form"
                action="{{ route('admin.distance-learning.book.update', ['book' => $book]) }}"
                enctype="multipart/form-data" method="POST">
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
                                placeholder="Enter your text here" value="{{ $book->name_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ $book->name_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ $book->name_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Photo</span>
                            <img class="img__file_reader" src="{{ Storage::url($book->img) }}" alt="">
                            <label class="text-20 admin-inp admin-inp-file" for="img">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="img" name="img">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="course">Course</label>
                            <select class="admin-inp" name="course_id" id="course">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}"
                                        @if($course->id === $book->course_id)selected @endif>
                                        {{ $course->name_am }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="inputs__group book-pdf__group">
                        <span class="text-20 form__item_name">Book Pdf <span class="admin__input_add">+</span></span>
                        <div class="flex form__item-wrap">
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                                <input class="admin-inp" type="text" id="name__en" name="enNames[]"
                                    placeholder="Enter your text here">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="name__en">Name (Armenian)</label>
                                <input class="admin-inp" type="text" id="name__en" name="amNames[]"
                                    placeholder="Enter your text here">
                            </div>
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="name__en">Name (Russian)</label>
                                <input class="admin-inp" type="text" id="name__en" name="ruNames[]"
                                    placeholder="Enter your text here">
                            </div>
                            <div class="form__item form__item-inp">
                                <span class="text-20 form__item_name">File</span>
                                <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="pdf">Attach your File</label>
                                <input class="admin-file admin-file-pdf" type="file" id="pdf" name="pdfs[]" accept=".pdf">
                            </div>
                        </div>
                    </div>

                    @if(count($book->pdfs) > 0)
                        <div class="inputs__group">
                            <span class="text-20 form__item_name">Pdfs</span>
                            <div class="flex admin__edit_imgs admin__edit_column">
                                @foreach ($book->pdfs as $pdf)
                                    <div class="admin__edit_img admin__edit_bordered">
                                        <span class="text-20">{{ $pdf->name_en }}</span>
                                        <a class="text-18 admin__edit_link" href="{{ Storage::url($pdf->pdf) }}"
                                            target="_blank">pdf</a>
                                        <a class="admin__edit_img_delete"
                                            href="{{ route('admin.distance-learning.bookPdfDelete', ['id' => $pdf->id]) }}">
                                            <img class="img" src="/media/img/icons/delete.png" alt="delete">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <input type="hidden" name="imgHidden" value="{{ $book->img }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/js/admin/inputsAddBooksPdf.js"></script>
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
@endsection