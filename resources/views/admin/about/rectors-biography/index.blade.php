@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ռեկտորի կենսագրություն</h2>
            </div>

            @if (count($rectorsBiography) == 0)
                <a class="admin-item__create" href="{{ route('admin.about.rectors-biography.create') }}">
                    <span class="admin-item__plus">+</span>
                </a>
            @endif
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18" style="width: 15%">name</th>
                    <th class="th text-18" style="width: 15%">position</th>
                    <th class="th text-18">biography</th>
                    <th class="th text-18" style="width: 10%">img</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($rectorsBiography as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->name_am }}</td>
                        <td class="td text-18">{{ $item->position_am }}</td>
                        <td class="td text-18">
                            <div class="td-scroll">
                                {!! $item->biography_am !!}
                            </div>
                        </td>
                        <td class="td text-18">
                            <img class="img" src="{{ Storage::url($item->img) }}" alt="{{ $item->name_am }}">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.rectors-biography.edit',
                                    ['rectors_biography' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>


        {{-- foremr rectors biography *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Նախկին Ռեկտորի կենսագրություն</h2>
            </div>

            @if (count($foremrRectorsBiography) == 0)
                <a class="admin-item__create" href="{{ route('admin.about.former-rectors-biography.create') }}">
                    <span class="admin-item__plus">+</span>
                </a>
            @endif
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18" style="width: 15%">name</th>
                    <th class="th text-18" style="width: 15%">position</th>
                    <th class="th text-18">biography</th>
                    <th class="th text-18" style="width: 10%">img</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($foremrRectorsBiography as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->name_am }}</td>
                        <td class="td text-18">{{ $item->position_am }}</td>
                        <td class="td text-18">
                            <div class="td-scroll">
                                {!! $item->biography_am !!}
                            </div>
                        </td>
                        <td class="td text-18">
                            <img class="img" src="{{ Storage::url($item->img) }}" alt="{{ $item->name_am }}">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.former-rectors-biography.edit',
                                    ['former_rectors_biography' => $item]) }}">
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
