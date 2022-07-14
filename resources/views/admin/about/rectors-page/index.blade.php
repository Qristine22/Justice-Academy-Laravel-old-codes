@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի ռեկտոր</h2>
            </div>

            @if (count($data) == 0)
                <a class="admin-item__create admin-item__add" href="{{ route('admin.about.rectors-page.create') }}">
                    <span class="admin-item__plus">+</span>
                </a>
            @endif
            <a class="admin-item__create admin-item__trash" href="{{ route('admin.about.rectors-page.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">Text</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">
                            <div class="td-scroll">
                                {!! $item->text_am !!}
                            </div>
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.rectors-page.edit',
                                    ['rectors_page' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>


        {{-- rectors decree *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ռեկտորի հրամաններ</h2>
            </div>

            <a class="admin-item__create" href="{{ route('admin.about.rectors-decree.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">Info</th>
                    <th class="th text-18" style="width: 20%">File Name</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($decrees as $decree)
                    <tr>
                        <td class="td text-18">{{ $decree->id }}</td>
                        <td class="td">{!! $decree->info_am !!}</td>
                        <td class="td text-18">{{ $decree->pdf_name }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.rectors-decree.edit',
                                    ['rectors_decree' => $decree]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form
                                    action="{{ route('admin.about.rectors-decree.destroy',
                                    ['rectors_decree' => $decree]) }}" method="POST">
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
            
            {{ $decrees->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
