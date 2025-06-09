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

        <hr>

        <h2>Реципиенты:</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Всего</th>
                <th scope="col">Активно</th>
                <th scope="col">Закрыты</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $data['recipients'] }}</td>
                <td>{{ $data['recipientsActive'] }}</td>
                <td>{{ $data['recipientsDone'] }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
