@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">
        <form class="form" action="{{ route('kids.update', $kid->id) }}" method="post">
            <h3>Создание реципиента</h3>

            @csrf
            @method('put')

            <input type="hidden" name="url" value="{{ fake()->imageUrl }}">

            <input type="hidden" value="{{ $kid->id }}">
            <input class="form-control"  type="text" name="first_name" placeholder="Имя" value="{{ $kid->first_name }}"><br>
            @error('first_name')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control"  type="text" name="last_name" placeholder="Фамилия" value="{{ $kid->last_name }}"><br>
            @error('last_name')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror
            <input class="form-control"  type="text" name="declension_name" placeholder="Имя в склонении" value="{{ $kid->declension_name }}"><br>
            @error('declension_name')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror
            <textarea class="form-control"  name="history" id="" cols="30" rows="10" placeholder="История ...">{{ $kid->history }}</textarea><br>
            @error('history')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control"  type="text" name="fundraising" placeholder="Сколько пожертвовали"><br>
            @error('fundraising')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <a class="btn btn-more" href="{{ url()->previous() }}">Назад</a>
            <button class="btn btn-more" type="submit">Отправить</button>
        </form>
    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
