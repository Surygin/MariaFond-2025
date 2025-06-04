@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">

        <form class="form" action="{{ route('admin.requisites.update') }}" method="post">
            <h2>Реквизиты:</h2>
            @csrf
            <input class="form-control mb-3" type="text" name="inn" placeholder="Введите ИНН" value="{{ $requisites->inn }}">
            @error('inn')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="rs" placeholder="Введите Р\с" value="{{ $requisites->rs }}">
            @error('rs')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="ks" placeholder="Введите К\с" value="{{ $requisites->ks }}">
            @error('ks')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="kpp" placeholder="Введите КПП" value="{{ $requisites->kpp }}">
            @error('kpp')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="bik" placeholder="Введите БИК банка" value="{{ $requisites->bik }}">
            @error('bik')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="ogrn" placeholder="Введите ОГРН" value="{{ $requisites->ogrn }}">
            @error('ogrn')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="recipient" placeholder="Введите получателя" value="{{ $requisites->recipient }}">
            @error('recipient')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="bank_title" placeholder="Введите название банка" value="{{ $requisites->bank_title }}">
            @error('bank_title')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror

            <input class="form-control mb-3" type="text" name="bank_address" placeholder="Введите адрес банка" value="{{ $requisites->bank_address }}">
            @error('bank_address')
            <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
            @enderror



            <button class="btn btn-more" type="submit">Обновить</button>
        </form>

    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
