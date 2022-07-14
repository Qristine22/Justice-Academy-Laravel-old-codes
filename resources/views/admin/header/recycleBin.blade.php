@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Նավիգացիա</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18">link</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($headers as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->name_am }}</td>
                        <td class="td">{{ $item->link }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.header.recycleBinRestore', ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form action="{{ route('admin.header.forceDelete', ['id' => $item]) }}" method="GET">
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

            {{ $headers->appends(['subHeaders' => $subHeaders->currentPage()])->links('includes.pagination.paginate') }}
        </section>

        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ենթա Նավիգացիա</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18">link</th>
                    <th class="th text-18" style="width: 5%">parent</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($subHeaders as $subheader)
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
                                <a class="table__panel_item" href="{{ route('admin.subheader.recycleBinRestore',
                                    ['id' => $subheader]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form action="{{ route('admin.subheader.forceDelete', ['id' => $subheader]) }}"
                                    method="GET">
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

            {{ $subHeaders->appends(['headers' => $headers->currentPage()])->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
