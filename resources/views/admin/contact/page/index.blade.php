@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Հետադարձ կապ</h2>
            </div>
            @if(count($contactPage) == 0)
                <a class="admin-item__create" href="{{ route('admin.contact.page.create') }}">
                    <span class="admin-item__plus">+</span>
                </a>
            @endif
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">address</th>
                    <th class="th text-18">mail</th>
                    <th class="th text-18">phone</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($contactPage as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->address_am }}</td>
                        <td class="td">{{ $item->mail }}</td>
                        <td class="td">{{ $item->phone }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.contact.page.edit', ['page' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                {{-- <form action="{{ route('admin.contact.page.destroy', ['page' => $item]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="table__panel_item table__panel_delete">
                                        <img class="img" src="/media/img/icons/delete.png" alt="edit">
                                    </button>
                                </form> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
@endsection
