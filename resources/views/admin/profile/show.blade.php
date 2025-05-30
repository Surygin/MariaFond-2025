@extends('admin.base')

@section('content')

    <h1>Привет - {{ $user->name }}!</h1>

    <p>
        Мой логин: <br>
        {{ $user->email }}
    </p>
    <p>
        <a href="{{ route('profile.edit.password') }}">
            Сменить пароль!
        </a>
    </p>

@endsection
