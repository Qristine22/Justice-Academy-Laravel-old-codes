@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Հետադարձ կապ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.contact.page.update', ['page' => $page]) }}" method="POST">
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
                            <label class="text-20 form__item_name" for="address__en">Address (English)</label>
                            <input class="admin-inp" type="text" id="address__en" name="address_en"
                                placeholder="Enter your text here" value="{{ $page->address_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="address__am">Address (Armenian)</label>
                            <input class="admin-inp" type="text" id="address__am" name="address_am"
                                placeholder="Enter your text here" value="{{ $page->address_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="address__ru">Address (Russian)</label>
                            <input class="admin-inp" type="text" id="address__ru" name="address_ru"
                                placeholder="Enter your text here" value="{{ $page->address_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="mail">Mail</label>
                            <input class="admin-inp" type="text" id="mail" name="mail"
                                placeholder="Enter your text here" value="{{ $page->mail }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="phone">Phone</label>
                            <input class="admin-inp" type="text" id="phone" name="phone"
                                placeholder="Enter your text here" value="{{ $page->phone }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="map">Map</label>
                            <input class="admin-inp" type="text" id="map" name="map"
                                placeholder="Enter your text here" value="{{ $page->map }}">
                        </div>
                    </div>
                </div>

                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection