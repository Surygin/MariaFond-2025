@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">

        <form class="form" action="" method="post">
            <h2>Контакты:</h2>

            <input class="form-control mb-3" type="text" name="phone" placeholder="Введите телефон" value="{{ $contacts->phone }}">
            @error('phone')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="email" placeholder="Введите Email" value="{{ $contacts->email }}">
            @error('email')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="vk" placeholder="Введите адрес VK" value="{{ $contacts->vk }}">
            @error('vk')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="other_link" placeholder="Место для еще одной ссылки" value="{{ $contacts->other_link }}">
            @error('other_link')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <button class="btn btn-more" type="submit">Обновить</button>
        </form>

    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
