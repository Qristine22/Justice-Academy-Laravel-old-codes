@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Անձնակազմ</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.contact.staff.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash"
                href="{{ route('admin.contact.staff.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">position</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18">mail</th>
                    <th class="th text-18">phone</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($contactStaff as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->position_am }}</td>
                        <td class="td">{!! $item->name_am !!}</td>
                        <td class="td">{{ $item->mail }}</td>
                        <td class="td">{{ $item->phone }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.contact.staff.edit', ['staff' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.contact.staff.destroy', ['staff' => $item]) }}" method="POST">
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
        </section>

        {{ $contactStaff->links('includes.pagination.paginate') }}
    </div>
@endsection
