<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ադմինիստրատիվ համակարգ</title>
    <link rel="icon" type="image/x-icon" href="/media/img/logo/brownLogo.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/media/fonts/fonts.css">
    <link rel="stylesheet" href="/css/admin/all.css">
    @yield('styles')
</head>
<body>
    <div class="preloader flex">
        <div class="preloader__img">
            <div class="preloader__cont"></div>
            <img class="img" src="/media/img/logo/brownLogo.png" alt="loading">
        </div>
    </div>
    <div class="admin">
        @include('includes.admin.header')

        @yield('content')
    </div>


    <script src="/js/loader.js"></script>
    <script src="/js/admin/main.js"></script>
    @yield('scripts')
</body>
</html>