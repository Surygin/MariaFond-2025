@extends('admin.base')

@section('content')

    <form action="{{ route('kids.store') }}" method="post">
        <h3>Создание реципиента</h3>
        @csrf
        <input type="text" name="first_name" placeholder="Имя" value="{{ fake()->firstName() }}"><br>
        @error('first_name')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <br>
        <input type="text" name="last_name" placeholder="Фамилия" value="{{ fake()->lastName() }}"><br>
        @error('last_name')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <input type="text" name="declension_name" placeholder="Имя в склонении" value="asdasdas"><br>
        @error('declension_name')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <textarea name="history" id="" cols="30" rows="10" placeholder="История ...">{{ fake()->text(100) }}</textarea><br>
        @error('history')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <input type="text" name="end_fundraising" placeholder="Необходимая сумма" value="{{ random_int(3000, 10000) }}"><br>
        @error('end_fundraising')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <button type="submit">Отправить</button>
{{--        <input type="submit" value="Создать">--}}
    </form>

@endsection
