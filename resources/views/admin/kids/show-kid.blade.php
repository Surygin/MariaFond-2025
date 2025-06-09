@extends('admin.base')

@section('content')

    <div class="col-lg-8 col-12">

        <a class="btn btn-more mb-3" href="{{ url()->previous() }}">Назад</a>

        <img src="{{ $kid->image->url }}" class="img-fluid rounded-start" alt="{{ $kid->first_name .' '. $kid->last_name}}">

        <h5 class="card-title">ФИО: {{ $kid->first_name . ' ' . $kid->last_name}}</h5>
        <p class="card-text">{{ $kid->history }}</p>

        <ul>
            <li><h3>Собрано: {{ $kid->start_fundraising }}</h3></li>
            <li><h3>Требуемая сумма: {{ $kid->end_fundraising }}</h3></li>
        </ul>





    </div>
    <!-- /.col-lg-8 col-12 -->

@endsection
