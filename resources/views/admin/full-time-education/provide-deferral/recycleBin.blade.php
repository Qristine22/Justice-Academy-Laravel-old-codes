@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ունկնդիրներին տարկետում տրամադրելու կարգ</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18" style="width: 5%">File</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($provideDeferral as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->name_am }}</td>
                        <td class="td text-18">
                            <img src="/media/img/icons/pdf.png" alt="pdf">    
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.full-time-education.provide-deferral.recycleBinRestore',
                                    ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form
                                    action="{{ route('admin.full-time-education.provide-deferral.forceDelete',
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

            {{ $provideDeferral->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
