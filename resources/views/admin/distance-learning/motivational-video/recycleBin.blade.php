@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Մոտիվացնող Տեսանյութեր</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">Name</th>
                    <th class="th text-18" style="width: 15%">Video</th>
                    <th class="th text-18" style="width: 5%">Course Id</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($motivationalVideos as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->name_am }}</td>
                        <td class="td">{!! $item->video !!}</td>
                        <td class="td">{{ $item->course_id }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.distance-learning.motivational-video.recycleBinRestore',
                                        ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form action="{{ route('admin.distance-learning.motivational-video.forceDelete',
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
        </section>

        {{ $motivationalVideos->links('includes.pagination.paginate') }}
    </div>
@endsection
