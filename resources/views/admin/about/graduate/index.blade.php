@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի շրջանավարտներ</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.about.graduates.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash" href="{{ route('admin.about.graduates.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18" style="width: 20%">Name</th>
                    <th class="th text-18">Info</th>
                    <th class="th text-18" style="width: 10%">Position</th>
                    <th class="th text-18" style="width: 5%">year</th>
                    <th class="th text-18" style="width: 10%">Photo</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($graduates as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->name }}</td>
                        <td class="td">{{ $item->info }}</td>
                        <td class="td">{{ $item->position }}</td>
                        <td class="td">{{ $item->year }}</td>
                        <td class="td">
                            <img class="img" src="{{ Storage::url($item->img) }}" alt="{{ $item->name }}">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.about.graduates.edit', ['graduate' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.about.graduates.destroy', ['graduate' => $item]) }}" method="POST">
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

            {{ $graduates->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
