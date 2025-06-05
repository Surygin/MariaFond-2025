@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">
        <form action="{{ route('kids.store') }}" method="post" enctype="multipart/form-data">

            <h3>Создание реципиента</h3>
            @csrf

            <input class="form-control mb-3" type="file" name="url" placeholder="Выбирите файл">
            @error('url')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror
            <input class="form-control" type="text" name="first_name" placeholder="Имя" value="{{ fake()->firstName() }}"><br>
            @error('first_name')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror
            <input class="form-control" type="text" name="last_name" placeholder="Фамилия" value="{{ fake()->lastName() }}"><br>
            @error('last_name')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror
            <input class="form-control" type="text" name="declension_name" placeholder="Имя в склонении" value="asdasdas"><br>
            @error('declension_name')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror
            <textarea class="form-control" name="history" id="" cols="30" rows="10" placeholder="История ...">{{ fake()->text(100) }}</textarea><br>
            @error('history')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror
            <input class="form-control" type="text" name="end_fundraising" placeholder="Необходимая сумма" value="{{ random_int(3000, 10000) }}"><br>
            @error('end_fundraising')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <a class="btn btn-more" href="{{ url()->previous() }}">Назад</a>
            <button class="btn btn-more" type="submit">Отправить</button>

        </form>
    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
