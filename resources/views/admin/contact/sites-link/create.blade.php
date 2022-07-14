@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Կայքերի հղումներ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.contact.sites-link.store') }}" method="POST"
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
                            <label class="text-20 form__item_name" for="link">Link</label>
                            <input class="admin-inp" type="text" id="link" name="link"
                                placeholder="Enter your text here" value="{{ old('link') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Icon</span>
                            <img class="img__file_reader" src="" alt="">
                            <label class="text-20 admin-inp admin-inp-file" for="icon">Attach your Icon</label>
                            <input class="admin-file admin-file-img" type="file" id="icon" name="icon">
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