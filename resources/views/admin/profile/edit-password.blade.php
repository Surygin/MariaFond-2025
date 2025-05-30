@extends('admin.base')

@section('content')

    <form action="{{ route('profile.update.password') }}" method="post">
        <h2>Смена пароля:</h2>
        @error('new_password')
        <div class="alert alert-danger" style="background-color: darkseagreen; color: darkcyan;">{{ $message }}</div>
        @enderror
        @csrf
        @method('put')
        <input type="password" name="old_password" placeholder="Старый пароль"><br>
        @error('old_password')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

        <input type="password" name="password" placeholder="Новый пароль"><br>
        @error('password')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

        <input type="password" name="confirmed_password" placeholder="Подтвердить новый пароль"><br>
        @error('confirmed_password')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

        <button type="submit">Сменить</button>
    </form>

@endsection
