@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեղեկատվական Տեսանյութեր</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.distance-learning.video-material.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash"
                href="{{ route('admin.distance-learning.video-material.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">Name</th>
                    <th class="th text-18">Video</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($distanceLearningVideoMaterials as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->name_am }}</td>
                        <td class="td">
                            <video class="videos__video" controls="controls">
                                <source src="{{ Storage::url($item->video) }}" type="video/mp4"
                                    data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                                <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                                Your browser does not support the video tag.
                            </video>
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.distance-learning.video-material.edit', ['video_material' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.distance-learning.video-material.destroy', ['video_material' => $item]) }}" method="POST">
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
            {{ $distanceLearningVideoMaterials->links('includes.pagination.paginate') }}

        </section>
    </div>
@endsection
