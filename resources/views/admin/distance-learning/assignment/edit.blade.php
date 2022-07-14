@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Առաջադրանք</h2>
            </div>
            <form class="admin__form" action="{{ route('admin.distance-learning.assignment.update',
                ['assignment' => $assignment]) }}" method="POST" enctype="multipart/form-data">
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
                                placeholder="Enter your text here" value="{{ $assignment->name_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ $assignment->name_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ $assignment->name_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">File</span>
                            <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="link">Attach your File</label>
                            <input class="admin-file admin-file-pdf" type="file" id="link" name="link">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="course">Course</label>
                            <select class="admin-inp" name="course_id" id="course">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}"
                                        @if($course->id === $assignment->course_id)selected @endif>
                                        {{ $course->name_am }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <input type="hidden" name="linkHidden" value="{{ $assignment->link }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
@endsection