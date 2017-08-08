@extends('layouts.site')
@section('content')
    @if(Auth::user()->role === 'admin')
    <table class="table table-hover">
        <thead>
        <tr>
            <th>№/ID</th>
            <th>Заголовок</th>
            <th>Категорія</th>
            <th>Функції</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
        <tr>
            <td>{{ $new->id }}</td>
            <td><a href="{{ route('news') }}/{{ $new->category_id }}/{{ $new->id }}">{{ $new->title }}</a></td>
            <td>{{ $new->category_id }}</td>
            <td><div class="btn-group btn-group-xs" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">Редагувати</button>
                    @if($new->is_on == '1')
                    <button type="button" class="btn btn-default"><a href="{{ route('admin') }}/turn/{{ $new->id }}-{{ $new->is_on }}">Відключити</a></button>
                    @elseif($new->is_on == '0')
                        <button type="button" class="btn btn-default"><a href="{{ route('admin') }}/turn/{{ $new->id }}-{{ $new->is_on }}">Включити</a>
                            @endif
                    <button type="button" class="btn btn-default">Видалити</button>
                </div></td>
        </tr>
            @endforeach
        </tbody>
    </table>
        @else
        @include('errors.404')
        @endifcom
    @endsection