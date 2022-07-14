@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot", ['headersBot' => $headersBot])
@endsection

@section('content')
    <main>
        <section class="structure section-top">
            <div class="wrapper">
                <div class="structure__cont">
                    <img class="structure__img" src="/media/img/about/bgs/structure.png" alt="structure">

                    {{-- governing board --}}
                    <a class="structure__btn structure__governing-board"
                        href="{{ isset($academyStructure[0]->link) ? env('APP_URL').$academyStructure[0]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">{!! $academyStructure[0]->{'name_'.app()->getLocale()} !!}</span>
                    </a>

                    {{-- rector --}}
                    <a class="structure__btn structure__rector"
                        href="{{ isset($academyStructure[1]->link) ? env('APP_URL').$academyStructure[1]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">{!! $academyStructure[1]->{'name_'.app()->getLocale()} !!}</span>
                    </a>

                    {{-- rector's advisor --}}
                    <a class="structure__btn structure__mid_link structure__advisor"
                        href="{{ isset($academyStructure[2]->link) ? env('APP_URL').$academyStructure[2]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">{!! $academyStructure[2]->{'name_'.app()->getLocale()} !!}</span>
                    </a>

                    {{-- VICE rector --}}
                    <a class="structure__btn structure__mid_link structure__vice-rector"
                    href="{{ isset($academyStructure[3]->link) ? env('APP_URL').$academyStructure[3]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">{!! $academyStructure[3]->{'name_'.app()->getLocale()} !!}</span>
                    </a>

                    {{-- chief of staff --}}
                    <a class="structure__btn structure__mid_link structure__chief"
                        href="{{ isset($academyStructure[4]->link) ? env('APP_URL').$academyStructure[4]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">{!! $academyStructure[4]->{'name_'.app()->getLocale()} !!}</span>
                    </a>

                    {{-- departament of Distance learning and it --}}
                    <a class="structure__btn structure__mid_link structure__it"
                        href="{{ isset($academyStructure[5]->link) ? env('APP_URL').$academyStructure[5]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">{!! $academyStructure[5]->{'name_'.app()->getLocale()} !!}</span>
                    </a>

                    {{-- Bulletin of the Academy of Justice --}}
                    <a class="structure__btn structure__small_link-left structure__scientific-research"
                        href="{{ isset($academyStructure[7]->link) ? env('APP_URL').$academyStructure[7]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[7]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Unit of Organization of Scientific Research and Programmatic methodological Activities --}}
                    <a class="structure__btn structure__small_link-left structure__judiciary"
                        href="{{ isset($academyStructure[9]->link) ? env('APP_URL').$academyStructure[9]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[9]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Library --}}
                    <a class="structure__btn structure__small_link-left structure__prosecutorial"
                        href="{{ isset($academyStructure[11]->link) ? env('APP_URL').$academyStructure[11]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[11]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Unit of Organization of Training for Trainees of Judiciary --}}
                    <a class="structure__btn structure__small_link-center structure__bulletin"
                        href="{{ isset($academyStructure[6]->link) ? env('APP_URL').$academyStructure[6]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[6]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Publishing house --}}
                    <a class="structure__btn structure__small_link-center structure__library"
                        href="{{ isset($academyStructure[8]->link) ? env('APP_URL').$academyStructure[8]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[8]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Unit of Organization of Training for Trainees of Prosecutorial and Investigative systems --}}
                    <a class="structure__btn structure__small_link-center structure__publishing"
                        href="{{ isset($academyStructure[10]->link) ? env('APP_URL').$academyStructure[10]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[10]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- unit of finance --}}
                    <a class="structure__btn structure__small_link-right structure__finance"
                        href="{{ isset($academyStructure[12]->link) ? env('APP_URL').$academyStructure[12]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[12]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Unit of Cooperation and Public Relations --}}
                    <a class="structure__btn structure__small_link-right structure__cooperation"
                        href="{{ isset($academyStructure[13]->link) ? env('APP_URL').$academyStructure[13]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[13]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Unit of Staff and Document management --}}
                    <a class="structure__btn structure__small_link-right structure__staff"
                        href="{{ isset($academyStructure[14]->link) ? env('APP_URL').$academyStructure[14]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[14]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Unit of Tehchnical and Economic activities --}}
                    <a class="structure__btn structure__small_link-right structure__tehchnic"
                        href="{{ isset($academyStructure[15]->link) ? env('APP_URL').$academyStructure[15]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[15]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>

                    {{-- Hotel --}}
                    <a class="structure__btn structure__small_link-right structure__hotel"
                        href="{{ isset($academyStructure[16]->link) ? env('APP_URL').$academyStructure[16]->link : env('APP_URL').'about/academy-structure' }}">
                        <span class="structure__span">
                            {!! $academyStructure[16]->{'name_'.app()->getLocale()} !!}
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
