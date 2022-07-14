@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        {{-- governing board decrees *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Կառավարման խորհրդի որոշումներ</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18" style="width: 5%">year</th>
                    <th class="th text-18">info</th>
                    <th class="th text-18" style="width: 20%">file name</th>
                    <th class="th text-18" style="width: 5%">file</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($decrees as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->year }}</td>
                        <td class="td text-18">{{ $item->info_am }}</td>
                        <td class="td text-18">{{ $item->pdf_name }}</td>
                        <td class="td text-18">
                            <img src="/media/img/icons/pdf.png" alt="pdf">    
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.governing-board-decree.recycleBinRestore',
                                    ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form
                                    action="{{ route('admin.about.governing-board-decree.forceDelete',
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

            {{ $decrees->appends(['staff' => $staff->currentPage()])->links('includes.pagination.paginate') }}
        </section>



        {{-- governing board staff *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Կառավարման խորհրդի կազմ</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18" style="width: 5%">name</th>
                    <th class="th text-18" style="width: 15%">position</th>
                    <th class="th text-18">biography</th>
                    <th class="th text-18" style="width: 10%">Photo</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($staff as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->name_am }}</td>
                        <td class="td text-18">{{ $item->position_am }}</td>
                        <td class="td text-18">
                            <div class="td-scroll">
                                {!! $item->biography !!}
                            </div>
                        </td>
                        <td class="td text-18">
                            <img class="img" src="{{ Storage::url($item->img) }}" alt="pdf">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.governing-board-staff.recycleBinRestore',
                                    ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form
                                    action="{{ route('admin.about.governing-board-staff.forceDelete',
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

            {{ $staff->appends(['decrees' => $decrees->currentPage()])->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
