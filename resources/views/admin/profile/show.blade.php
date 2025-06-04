@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">
        <h1>Привет - {{ $user->name }}!</h1>

        <p>
            Мой email: <br>
            {{ $user->email }}
        </p>
        <p>
            <a class="btn btn-more" href="{{ route('profile.edit.password') }}">
                Сменить пароль!
            </a>
        </p>
    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
