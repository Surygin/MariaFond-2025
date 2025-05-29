@extends('admin.base')

@section('content')

    <form action="{{ route('profile.update.password') }}" method="post">
        <h2>Смена пароля:</h2>
        @csrf
        @method('put')
        <input type="password" name="old_password" placeholder="Старый пароль">
        @error('old_password')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

        <input type="password" name="password" placeholder="Новый пароль">
        @error('password')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

        <input type="password" name="confirmed_password" placeholder="Подтвердить новый пароль">
        @error('confirmed_password')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

        <button type="submit">Сменить</button>
    </form>

@endsection
