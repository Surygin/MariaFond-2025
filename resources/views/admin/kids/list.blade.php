@extends('admin.base')

@section('content')
    <ol style="padding: 50px 20px;">
        @foreach($kids as $kid)
            <li style="display: flex; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #686868;">
                <b><a href="/kid/{{ $kid->id }}">{{ $kid->first_name . ' ' . $kid->last_name}}</a></b>
                <span>
                    <a href="{{ route('kids.edit', $kid->id) }}">обновить</a> |
                    <a href="{{ route('kids.delete', $kid->id) }}">удалить</a>
                </span>
            </li>
        @endforeach
    </ol>
@endsection
