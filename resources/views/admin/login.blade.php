<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Արդարադատության Ակադեմիա - ԱՐԴԱՐԱԴԱՏՈւԹՅԱՆ ԱԿԱԴԵՄԻԱ</title>
    <link rel="icon" type="image/x-icon" href="/media/img/logo/brownLogo.png">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/media/fonts/fonts.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/response/home-response.css">
    <link rel="stylesheet" href="/css/response/all-response.css">
</head>

<body>
    <div class="preloader flex">
        <div class="preloader__img">
            <div class="preloader__cont"></div>
            <img class="img" src="/media/img/logo/brownLogo.png" alt="loading">
        </div>
    </div>
    <main>
        <section class="login">
            <form action="{{ route('loginProgress') }}" method="POST">
                @csrf
                <div class="form__item flex">
                    <label for="login">login</label>
                    <input class="inp login__inp" type="text" id="login" name="login" value="{{ old('login') }}"
                        placeholder="login">
                </div>
                <div class="form__item flex">
                    <label for="password">password</label>
                    <input class="inp login__inp" type="password" id="password" name="password" value="{{ old('password') }}" placeholder="password">
                </div>
                <div class="login__btn_cont">
                    <button class="login__btn">login</button>
                </div>
            </form>
            @if ($errors->any())
            @foreach ($errors->all() as $e)
                <p class="error">{{ $e }}</p>
            @endforeach
        @endif
        </section>
    </main>

    <script src="/js/loader.js"></script>
</body>

</html>
