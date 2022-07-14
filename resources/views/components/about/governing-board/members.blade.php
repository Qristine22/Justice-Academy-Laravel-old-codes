<div class="members__item">
    <img class="img" src="{{ Storage::url($item->img) }}" alt="1">
    <a class="members__item_cont" href="{{ route('governingBoardBiography', ['id' => $item->id]) }}">
        <h3 class="member__title">{{ $item->{'name_'.app()->getLocale()} }}</h3>
        <h4 class="member__subtitle">{{ $item->{'position_'.app()->getLocale()} }}</h4>
    </a>
</div>