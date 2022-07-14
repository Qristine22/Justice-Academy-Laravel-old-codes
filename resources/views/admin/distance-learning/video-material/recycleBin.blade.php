@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեղեկատվական Տեսանյութեր</h2>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">Name</th>
                    <th class="th text-18">Video</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($videoMaterials as $item)
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
                                    href="{{ route('admin.distance-learning.video-material.recycleBinRestore',
                                        ['id' => $item]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form action="{{ route('admin.distance-learning.video-material.forceDelete',
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
            {{ $videoMaterials->links('includes.pagination.paginate') }}

        </section>
    </div>
@endsection
