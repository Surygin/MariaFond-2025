@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">
        <form class="form" action="{{ route('kids.update', $kid->id) }}" method="post" enctype="multipart/form-data">
            <h3>Создание реципиента</h3>

            @csrf
            @method('put')

            <img src="{{ $kid->image_for_kid }}" class="img-fluid rounded-start mb-3" alt="{{ $kid->first_name .' '. $kid->last_name}}">

            <input class="form-control mb-3" type="file" name="url" placeholder="Выбирите файл">
            @error('url')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

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
