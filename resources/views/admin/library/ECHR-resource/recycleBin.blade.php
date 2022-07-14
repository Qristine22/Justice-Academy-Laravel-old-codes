@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">ՄԻԵԴ իրավաբանության վերաբերյալ ռեսուրսներ</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18" style="width: 15%">Img</th>
                    <th class="th text-18" style="width: 5%">file</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($echrResources as $item)
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
                                    href="{{ route('admin.library.echr-resource.recycleBinRestore',
                                    ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form
                                    action="{{ route('admin.library.echr-resource.forceDelete',
                                    ['id' => $item]) }}" method="GET">
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

            {{ $echrResources->appends(['echrLinks' => $echrLinks->currentPage()])->links('includes.pagination.paginate') }}
        </section>


        {{-- ECHR Link *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Հղումներ</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18">link</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($echrLinks as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->name_am }}</td>
                        <td class="td">{{ $item->link }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.library.echr-link.recycleBinRestore',
                                    ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form
                                    action="{{ route('admin.library.echr-link.forceDelete',
                                    ['id' => $item]) }}" method="GET">
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

            {{ $echrLinks->appends(['echrResources' => $echrResources->currentPage()])->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
