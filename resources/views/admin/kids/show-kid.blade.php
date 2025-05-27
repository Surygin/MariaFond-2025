@extends('admin.base')

@section('content')

    <ul>
        <li>Name: {{ $kid->name }}</li>
        <li>Name: {{ $kid->history }}</li>
    </ul>

    <hr>
    <ul>
        <li><a href="{{ url()->previous() }}">Назад</a></li>
    </ul>

@endsection
