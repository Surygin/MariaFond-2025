@extends('admin.base')

@section('content')
    <ol>
        @foreach($kids as $kid)
            <li><b><a href="/kid/{{ $kid->id }}">{{ $kid->first_name }}</a></b></li>
        @endforeach
    </ol>
@endsection
