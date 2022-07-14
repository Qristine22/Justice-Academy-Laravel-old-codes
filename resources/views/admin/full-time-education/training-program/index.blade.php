@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ուսուցման ծրագրեր</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.full-time-education.training-program.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash"
                href="{{ route('admin.full-time-education.training-program.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18" style="width: 20%">name</th>
                    <th class="th text-18">info</th>
                    <th class="th text-18" style="width: 20%">category</th>
                    <th class="th text-18" style="width: 8%">year</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($trainingPrograms as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">{{ $item->name_am }}</td>
                        <td class="td text-18">{!! $item->description !!}</td>
                        <td class="td text-18">
                            @if($item->category == 'judge')
                                Դատական համակարգի ունկնդիրների ուսուցում
                            @elseif($item->category == 'prosecutor')
                                Դատախազության համակարգի ունկնդիրների ուսուցում
                            @elseif($item->category == 'investigator')
                                Քննչական համակարգի ունկնդիրների ուսուցում
                            @endif
                        </td>
                        <td class="td text-18">{{ $item->year }}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.full-time-education.training-program.edit',
                                    ['training_program' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form
                                    action="{{ route('admin.full-time-education.training-program.destroy',
                                    ['training_program' => $item]) }}" method="POST">
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

            {{ $trainingPrograms->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
