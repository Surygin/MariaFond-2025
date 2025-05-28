@extends('admin.base')

@section('content')

    <ul>
        <li>ФИО: {{ $kid->first_name }}</li>
        <li>История: {{ $kid->history }}</li>
        <hr>
        <li>Собрано: {{ $kid->start_fundraising }}</li>
    </ul>

    <hr>
    <ul>
        <li><a href="{{ url()->previous() }}">Назад</a></li>
    </ul>

@endsection
