@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի մասին</h2>
            </div>
            @if (count($data) == 0)
                <a class="admin-item__create" href="{{ route('admin.about.page.create') }}">
                    <span class="admin-item__plus">+</span>
                </a>
            @endif
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">Text</th>
                    <th class="th text-18" style="width: 8%">Created At</th>
                    <th class="th text-18" style="width: 8%">Updated At</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{!! $item->text_am !!}</td>
                        <td class="td">{{ $item->created_at }}</td>
                        <td class="td">{{ $item->updated_at }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.page.edit', ['page' => $item]) }}">
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
