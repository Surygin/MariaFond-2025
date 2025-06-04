@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">

        <form class="form" action="" method="post">
            <h2>О нас</h2>

            <input class="form-control mb-3" type="text" name="title" placeholder="Введите название" value="{{ $about->title }}">
            @error('title')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="description" placeholder="Введите описание" value="{{ $about->description }}">
            @error('description')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <textarea class="form-control mb-3" type="text" name="history" placeholder="Напишите историю организации">{{ $about->history }}</textarea>
            @error('history')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="address" placeholder="Введите адрес" value="{{ $about->address }}">
            @error('address')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <button class="btn btn-more" type="submit">Обновить</button>
        </form>

    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
