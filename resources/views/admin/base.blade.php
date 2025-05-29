<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'БФ Марии Леонтьевой') }}</title>
</head>
<body style="background-color: #2d3748; color: #a1a09a;">
<style>
    a {
        color: #ff4433;
    }
    .header__menu li {
        display: inline-block;
    }
</style>
<header>
    <h2>HEADER</h2>
    <ul class="header__menu">
        <li><a href="{{ route('home') }}">Главная</a></li> |
        @auth()
            <li><a href="{{ route('profile.show') }}">Профиль</a></li> |
            <li><a href="{{ route('kids.index') }}">Дети</a></li> |
            <li><a href="{{ route('kids.create') }}">Добавить реципиента</a></li>
            <li><a href="{{ route('logout') }}">Выход</a></li>
        @endauth
    </ul>
    <hr>
</header>

@yield('content')

<hr>
<footer>
    <h2>FOOTER</h2>
</footer>
</body>
</html>
