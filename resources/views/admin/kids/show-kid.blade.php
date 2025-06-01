@extends('admin.base')

@section('content')

    <img src="{{ $kid->image->url }}" alt="{{ $kid->first_name .' '. $kid->last_name}}">

    <ul>
        <li style="margin-bottom: 10px; padding-bottom: 10px;">ФИО: {{ $kid->first_name }}</li>
        <li style="border-bottom: 2px solid #a0aec0; margin-bottom: 10px; padding-bottom: 10px;">История: {{ $kid->history }}</li>
        <li><h3>Собрано: {{ $kid->start_fundraising }}</h3></li>
        <li><h3>Требуемая сумма: {{ $kid->end_fundraising }}</h3></li>
    </ul>

    <hr>
    <ul>
        <li><a href="{{ url()->previous() }}">Назад</a></li>
    </ul>

@endsection
