@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">{{ $title }}</h2>
            </div>

            <a class="admin-item__create admin-item__add" href="{{ route('admin.library.investigator-training-module.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash"
                href="{{ route('admin.library.investigator-training-module.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18" style="width: 15%">Img</th>
                    <th class="th text-18" style="width: 5%">file</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($books as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">
                            @if(@isset($item->name_am))
                                {{ $item->name_am }}
                            @else
                                ---
                            @endif
                        </td>
                        <td class="td">
                            @if(@isset($item->img))
                                <img class="img" src="{{ Storage::url($item->img) }}" alt="img">
                            @else
                                ---
                            @endif
                        </td>
                        <td class="td">
                            <img src="/media/img/icons/pdf.png" alt="pdf">    
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.library.investigator-training-module.edit',
                                    ['investigator_training_module' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form
                                    action="{{ route('admin.library.investigator-training-module.destroy',
                                    ['investigator_training_module' => $item]) }}" method="POST">
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

            {{ $books->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
