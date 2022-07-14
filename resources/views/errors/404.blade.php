@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/response/home-response.css">
@endsection

@section('content')
    <main>
        <section class="home section" style="background-image: url({{ Storage::url($home->bg) }})">
            <div class="wrapper">
                <div class="home__cont">
                    <div class="home__inner flex">
                        <h2 class="error-404">404</h2>
                        <h3 class="not-found-404">@lang('main.page-not-found')</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
