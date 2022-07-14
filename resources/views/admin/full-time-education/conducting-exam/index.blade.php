@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Քննությունների անցկացման կարգ</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.full-time-education.conducting-exam.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash"
                href="{{ route('admin.full-time-education.conducting-exam.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18" style="width: 5%">File</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($conductingExam as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->name_am }}</td>
                        <td class="td text-18">
                            <img src="/media/img/icons/pdf.png" alt="pdf">    
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.full-time-education.conducting-exam.edit',
                                    ['conducting_exam' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form
                                    action="{{ route('admin.full-time-education.conducting-exam.destroy',
                                    ['conducting_exam' => $item]) }}" method="POST">
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

            



            {{ $conductingExam->appends(['conductingExamVideos' => $conductingExamVideos->currentPage()])
                ->links('includes.pagination.paginate') }}
        </section>



        {{-- conducting exam video *************************************************************** --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Վիդեո</h2>
            </div>
            <a class="admin-item__create" href="{{ route('admin.full-time-education.conducting-exam-video.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">video</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($conductingExamVideos as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{!! $item->video !!}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.full-time-education.conducting-exam-video.edit',
                                    ['conducting_exam_video' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form
                                    action="{{ route('admin.full-time-education.conducting-exam-video.destroy',
                                    ['conducting_exam_video' => $item]) }}" method="POST">
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

            {{ $conductingExamVideos->appends(['conductingExam' => $conductingExam->currentPage()])
                ->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
