@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <form action="{{ route('login.check') }}" method="post">
                    <h2>Авторизация</h2>
                    @csrf
                    <input class="form-control mb-3" type="text" name="email" placeholder="Введите ваш Email:">
                    @error('email')
                    <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
                    @enderror
                    <input class="form-control mb-3" type="password" name="password" placeholder="Введите ваш пароль:">
                    @error('password')
                    <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-success" type="submit">Войти</button>
                </form>
            </div>
            <!-- /.col-12 col-lg-6 offset-lg-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

@endsection
