@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Նավիգացիա</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.header.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash" href="{{ route('admin.header.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18">link</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->name_am }}</td>
                        <td class="td">{{ $item->link }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.header.edit', ['header' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.header.destroy', ['header' => $item]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="table__panel_item table__panel_delete">
                                        <img class="img" src="/media/img/icons/delete.png" alt="edit">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $data->appends(['subheaders' => $subheaders->currentPage()])->links('includes.pagination.paginate') }}
        </section>

        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ենթա Նավիգացիա</h2>
            </div>
            <a class="admin-item__create" href="{{ route('admin.subheader.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18">link</th>
                    <th class="th text-18" style="width: 5%">parent</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($subheaders as $subheader)
                    <tr>
                        <td class="td text-18">{{ $subheader->id }}</td>
                        <td class="td">{{ $subheader->name_am }}</td>
                        <td class="td">{{ $subheader->link }}</td>
                        <td class="td">
                            @if (!@empty($subheader->parent_id))
                                {{ $subheader->parent_id }}
                            @else
                                -
                            @endif
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.subheader.edit',
                                    ['subheader' => $subheader]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.subheader.destroy', ['subheader' => $subheader]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="table__panel_item table__panel_delete">
                                        <img class="img" src="/media/img/icons/delete.png" alt="edit">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $subheaders->appends(['headers' => $data->currentPage()])->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
