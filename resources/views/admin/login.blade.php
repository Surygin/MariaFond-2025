@extends('admin.base')

@section('content')

    <form action="{{ route('login.check') }}" method="post">
        <h2>Авторизация</h2>
        @csrf
        <input type="text" name="email" placeholder="Введите ваш Email:">
        @error('email')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="Введите ваш пароль:">
        @error('password')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <button type="submit">Войти</button>
    </form>

@endsection
