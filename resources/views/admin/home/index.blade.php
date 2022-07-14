@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Գլխավոր էջ</h2>
            </div>
            @if (count($data) == 0)
                <a class="admin-item__create" href="{{ route('admin.home.create') }}">
                    <span class="admin-item__plus">+</span>
                </a>
            @endif
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">title</th>
                    <th class="th text-18">rectors word</th>
                    <th class="th text-18" style="width: 8%">bg</th>
                    <th class="th text-18" style="width: 8%">rectors photo</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{!! $item->title_am !!}</td>
                        <td class="td">{!! $item->rectors_word_am !!}</td>
                        <td class="td">
                            <img class="img" src="{{ Storage::url($item->bg) }}" alt="bg">
                        </td>
                        <td class="td">
                            <img class="img" src="{{ Storage::url($item->rectors_img) }}" alt="photo">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.home.edit', ['home' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
@endsection
