@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        {{-- rectors decree *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ռեկտորի հրամաններ</h2>
            </div>
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
                                    href="{{ route('admin.about.rectors-decree.recycleBinRestore',
                                    ['id' => $decree]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form
                                    action="{{ route('admin.about.rectors-decree.forceDelete',
                                    ['id' => $decree]) }}" method="GET">
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
