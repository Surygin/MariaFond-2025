@extends('admin.base')

@section('content')

    <form action="{{ route('kids.update', $kid->id) }}" method="post">
        <h3>Создание реципиента</h3>
        @csrf
        @method('put')
        <input type="hidden" value="{{ $kid->id }}">
        <input type="text" name="first_name" placeholder="Имя" value="{{ $kid->first_name }}"><br>
        @error('first_name')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <br>
        <input type="text" name="last_name" placeholder="Фамилия" value="{{ $kid->last_name }}"><br>
        @error('last_name')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <input type="text" name="declension_name" placeholder="Имя в склонении" value="{{ $kid->declension_name }}"><br>
        @error('declension_name')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror
        <textarea name="history" id="" cols="30" rows="10" placeholder="История ...">{{ $kid->history }}</textarea><br>
        @error('history')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

        <input type="text" name="fundraising" placeholder="Сколько пожертвовали"><br>
        @error('fundraising')
        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>
        @enderror

{{--        <input type="text" name="end_fundraising" placeholder="Необходимая сумма" value="{{ $kid->start_fundraising }}"><br>--}}
{{--        @error('start_fundraising')--}}
{{--        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>--}}
{{--        @enderror--}}
{{--        <input type="text" name="end_fundraising" placeholder="Необходимая сумма" value="{{ $kid->end_fundraising }}"><br>--}}
{{--        @error('end_fundraising')--}}
{{--        <div class="alert alert-danger" style="background-color: pink; color: deeppink;">{{ $message }}</div>--}}
{{--        @enderror--}}

        <button type="submit">Отправить</button>
        {{--        <input type="submit" value="Создать">--}}
    </form>

@endsection
