@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեսադասախոսություններ</h2>
            </div>
            <form class="admin__form" action="{{ route('admin.library.video-lecture.update',
                ['video_lecture' => $videoLecture]) }}" method="POST">
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
                            <label class="text-20 form__item_name" for="topic__en">Topic (English)</label>
                            <input class="admin-inp" type="text" id="topic__en" name="topic_en"
                                placeholder="Enter your text here" value="{{ $videoLecture->topic_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="topic__am">Topic (Armenian)</label>
                            <input class="admin-inp" type="text" id="topic__am" name="topic_am"
                                placeholder="Enter your text here" value="{{ $videoLecture->topic_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="topic__ru">Topic (Russian)</label>
                            <input class="admin-inp" type="text" id="topic__ru" name="topic_ru"
                                placeholder="Enter your text here" value="{{ $videoLecture->topic_en }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="lecturer__en">Lecturer (English)</label>
                            <input class="admin-inp" type="text" id="lecturer__en" name="lecturer_en"
                                placeholder="Enter your text here" value="{{ $videoLecture->lecturer_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="lecturer__am">Lecturer (Armenian)</label>
                            <input class="admin-inp" type="text" id="lecturer__am" name="lecturer_am"
                                placeholder="Enter your text here" value="{{ $videoLecture->lecturer_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="lecturer__ru">Lecturer (Russian)</label>
                            <input class="admin-inp" type="text" id="lecturer__ru" name="lecturer_ru"
                                placeholder="Enter your text here" value="{{ $videoLecture->lecturer_en }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="video">Video</label>
                            <input class="admin-inp" type="text" id="video" name="video"
                                placeholder="Enter your text here" value="{{ $videoLecture->video }}">
                        </div>
                    </div>
                </div>


                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection