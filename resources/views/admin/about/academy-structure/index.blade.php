@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի կառուցվածք</h2>
            </div>
            {{-- <a class="admin-item__create" href="{{ route('admin.about.academy-structure.create') }}">
                <span class="admin-item__plus">+</span>
            </a> --}}
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">Name</th>
                    <th class="th text-18" style="width: 20%">link</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{!! $item->name_am !!}</td>
                        <td class="td">{{ $item->link }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.academy-structure.edit', ['academy_structure' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $data->appends(['workers' => $workers->currentPage()])->links('includes.pagination.paginate') }}
        </section>



        {{-- workers biography *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Աշխատակազմ</h2>
            </div>
            @if (count($data) == 0)
                <a class="admin-item__create" href="{{ route('admin.about.workers.create') }}">
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
                @foreach ($workers as $item)
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
                            @if(count($item->imgs) > 0)
                                <img class="img" src="{{ Storage::url($item->imgs[0]->img) }}" alt="{{ $item->name_am }}">
                            @else
                                ընտրված չէ
                            @endif
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.workers.edit',
                                    ['worker' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $workers->appends(['academyStructure' => $data->currentPage()])->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
