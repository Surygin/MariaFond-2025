@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">
        <form class="form" action="{{ route('profile.update.password') }}" method="post">
            <h2>Смена пароля:</h2>
            @error('new_password')
            <div class="alert alert-danger" style="background-color: darkseagreen; color: darkcyan;">{{ $message }}</div>
            @enderror
            @csrf
            @method('put')
            <input class="form-control" type="password" name="old_password" placeholder="Старый пароль"><br>
            @error('old_password')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control" type="password" name="password" placeholder="Новый пароль"><br>
            @error('password')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control" type="password" name="confirmed_password" placeholder="Подтвердить новый пароль"><br>
            @error('confirmed_password')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <a class="btn btn-more" href="{{ url()->previous() }}">Назад</a>

            <button class="btn btn-more" type="submit">Сменить</button>
        </form>
    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
