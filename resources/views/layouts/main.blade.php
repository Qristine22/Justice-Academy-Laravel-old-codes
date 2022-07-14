<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Արդարադատության Ակադեմիա - ԱՐԴԱՐԱԴԱՏՈւԹՅԱՆ ԱԿԱԴԵՄԻԱ</title>
    <link rel="icon" type="image/x-icon" href="/media/img/logo/brownLogo.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/media/fonts/fonts.css">
    <link rel="stylesheet" href="/css/all.css">
    @yield('styles')
    <link rel="stylesheet" href="/css/response/all-response.css">
</head>

<body>
    <div class="preloader flex">
        <div class="preloader__img">
            <div class="preloader__cont"></div>
            <img class="img" src="/media/img/logo/brownLogo.png" alt="loading">
        </div>
    </div>
    @include('includes.header')
    @yield('header-bot')

    @yield('content')
    
    @include("includes.footer")

    <script src="/js/loader.js"></script>
    <script src="/js/main.js"></script>
    @yield('scripts')
</body>

</html>