@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Մոտիվացնող Տեսանյութեր</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.distance-learning.motivational-video.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash"
                href="{{ route('admin.distance-learning.motivational-video.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
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
                                    href="{{ route('admin.distance-learning.motivational-video.edit',
                                        ['motivational_video' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.distance-learning.motivational-video.destroy',
                                    ['motivational_video' => $item]) }}" method="POST">
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
