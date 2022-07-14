@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="learning-video section-text distance-learning">
            <div class="wrapper">
                {!! $distancelearningVideo->video !!}
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection
