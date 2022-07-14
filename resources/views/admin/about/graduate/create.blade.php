@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի շրջանավարտներ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.graduates.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name">Name</label>
                            <input class="admin-inp" type="text" id="name" name="name"
                                placeholder="Enter your text here" value="{{ old('name') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="info">Info</label>
                            <input class="admin-inp" type="text" id="info" name="info"
                                placeholder="Enter your text here" value="{{ old('info') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <img class="img__file_reader" src="" alt="">
                            <span class="text-20 form__item_name">Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="img">Attach your Photo</label>
                            <input class="admin-file admin-file-img" type="file" id="img" name="img">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position">Position</label>
                            <select class="admin-inp" name="position" id="position">
                                <option value="judge">judge</option>
                                <option value="prosecutor">prosecutor</option>
                                <option value="investigator">investigator</option>
                            </select>
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="year">Year</label>
                            <input class="admin-inp" type="text" id="year" name="year"
                                placeholder="Enter your text here" value="{{ old('year') }}">
                        </div>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
@endsection